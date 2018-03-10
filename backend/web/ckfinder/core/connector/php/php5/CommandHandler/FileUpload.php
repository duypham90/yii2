<?php
/**
 * CKFinder
 * ========
 * http://ckfinder.com
 * Copyright (C) 2007-2012, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */

if (!defined('IN_CKFINDER')) exit;

/**
 * @package CKFinder
 * @subpackage CommandHandlers
 * @copyright CKSource - Frederico Knabben
 */

/**
 * Handle FileUpload command
 *
 * @package CKFinder
 * @subpackage CommandHandlers
 * @copyright CKSource - Frederico Knabben
 */
class CKFinder_Connector_CommandHandler_FileUpload extends CKFinder_Connector_CommandHandler_CommandHandlerBase
{
    /**
     * Command name
     *
     * @access protected
     * @var string
     */
    protected $command = "FileUpload";

    /**
     * send response (save uploaded file, resize if required)
     * @access public
     *
     */
    public function sendResponse()
    {
        $iErrorNumber = CKFINDER_CONNECTOR_ERROR_NONE;

        $_config =& CKFinder_Connector_Core_Factory::getInstance("Core_Config");
        $oRegistry =& CKFinder_Connector_Core_Factory::getInstance("Core_Registry");
        $oRegistry->set("FileUpload_fileName", "unknown file");

        $uploadedFile = array_shift($_FILES);

        if (!isset($uploadedFile['name'])) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_INVALID);
        }
        // print_r($uploadedFile);die;
        // echo $uploadedFile['name'].'â';die;
        //$sFileName = $this->slugletterAndNumber($uploadedFile['name'],'-',true);
        //echo $sFileName."ok";die;
        
        $sUnsafeFileName = CKFinder_Connector_Utils_FileSystem::convertToFilesystemEncoding(CKFinder_Connector_Utils_Misc::mbBasename($uploadedFile['name']));
        $sFileName = str_replace(array(":", "*", "?", "|", "/"), "-", $sUnsafeFileName);
        $sFileName=$this->createNameAndFileType($sFileName);
        
        if ($_config->getDisallowUnsafeCharacters()) {
          $sFileName = str_replace(";", "_", $sFileName);
        }
        if ($_config->forceAscii()) {
            $sFileName = CKFinder_Connector_Utils_FileSystem::convertToAscii($sFileName);
        }
        if ($sFileName != $sUnsafeFileName) {
          $iErrorNumber = CKFINDER_CONNECTOR_ERROR_UPLOADED_INVALID_NAME_RENAMED;
        }
        $oRegistry->set("FileUpload_fileName", $sFileName);

        $this->checkConnector();
        $this->checkRequest();

        if (!$this->_currentFolder->checkAcl(CKFINDER_CONNECTOR_ACL_FILE_UPLOAD)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UNAUTHORIZED);
        }

        $_resourceTypeConfig = $this->_currentFolder->getResourceTypeConfig();
        if (!CKFinder_Connector_Utils_FileSystem::checkFileName($sFileName) || $_resourceTypeConfig->checkIsHiddenFile($sFileName)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_NAME);
        }

        $resourceTypeInfo = $this->_currentFolder->getResourceTypeConfig();
        if (!$resourceTypeInfo->checkExtension($sFileName)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_EXTENSION);
        }

        $sFileNameOrginal = $sFileName;
        $oRegistry->set("FileUpload_fileName", $sFileName);
        $oRegistry->set("FileUpload_url", $this->_currentFolder->getUrl());

        $maxSize = $resourceTypeInfo->getMaxSize();
        if (!$_config->checkSizeAfterScaling() && $maxSize && $uploadedFile['size']>$maxSize) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_TOO_BIG);
        }

        $htmlExtensions = $_config->getHtmlExtensions();
        $sExtension = CKFinder_Connector_Utils_FileSystem::getExtension($sFileNameOrginal);

        if ($htmlExtensions
        && !CKFinder_Connector_Utils_Misc::inArrayCaseInsensitive($sExtension, $htmlExtensions)
        && ($detectHtml = CKFinder_Connector_Utils_FileSystem::detectHtml($uploadedFile['tmp_name'])) === true ) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_WRONG_HTML_FILE);
        }

        $sExtension = CKFinder_Connector_Utils_FileSystem::getExtension($sFileNameOrginal);
        $secureImageUploads = $_config->getSecureImageUploads();
        if ($secureImageUploads
        && ($isImageValid = CKFinder_Connector_Utils_FileSystem::isImageValid($uploadedFile['tmp_name'], $sExtension)) === false ) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_CORRUPT);
        }

        switch ($uploadedFile['error']) {
            case UPLOAD_ERR_OK:
                break;

            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_TOO_BIG);
                break;

            case UPLOAD_ERR_PARTIAL:
            case UPLOAD_ERR_NO_FILE:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_CORRUPT);
                break;

            case UPLOAD_ERR_NO_TMP_DIR:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_NO_TMP_DIR);
                break;

            case UPLOAD_ERR_CANT_WRITE:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_ACCESS_DENIED);
                break;

            case UPLOAD_ERR_EXTENSION:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_ACCESS_DENIED);
                break;
        }

        $sServerDir = $this->_currentFolder->getServerPath();
        $iCounter = 0;

        while (true)
        {
            $sFilePath = CKFinder_Connector_Utils_FileSystem::combinePaths($sServerDir, $sFileName);

            if (file_exists($sFilePath)) {
                $iCounter++;
                $sFileName =
                CKFinder_Connector_Utils_FileSystem::getFileNameWithoutExtension($sFileNameOrginal) .
                "(" . $iCounter . ")" . "." .
                CKFinder_Connector_Utils_FileSystem::getExtension($sFileNameOrginal);
                $oRegistry->set("FileUpload_fileName", $sFileName);

                $iErrorNumber = CKFINDER_CONNECTOR_ERROR_UPLOADED_FILE_RENAMED;
            } else {
                if (false === move_uploaded_file($uploadedFile['tmp_name'], $sFilePath)) {
                    $iErrorNumber = CKFINDER_CONNECTOR_ERROR_ACCESS_DENIED;
                }
                else {
                    if (isset($detectHtml) && $detectHtml === -1 && CKFinder_Connector_Utils_FileSystem::detectHtml($sFilePath) === true) {
                        @unlink($sFilePath);
                        $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_WRONG_HTML_FILE);
                    }
                    else if (isset($isImageValid) && $isImageValid === -1 && CKFinder_Connector_Utils_FileSystem::isImageValid($sFilePath, $sExtension) === false) {
                        @unlink($sFilePath);
                        $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_CORRUPT);
                    }
                }
                if (is_file($sFilePath) && ($perms = $_config->getChmodFiles())) {
                    $oldumask = umask(0);
                    chmod($sFilePath, $perms);
                    umask($oldumask);
                }
                break;
            }
        }

        if (!$_config->checkSizeAfterScaling()) {
            $this->_errorHandler->throwError($iErrorNumber, true, false);
        }

        //resize image if required
        require_once CKFINDER_CONNECTOR_LIB_DIR . "/CommandHandler/Thumbnail.php";
        $_imagesConfig = $_config->getImagesConfig();

        if ($_imagesConfig->getMaxWidth()>0 && $_imagesConfig->getMaxHeight()>0 && $_imagesConfig->getQuality()>0) {
            CKFinder_Connector_CommandHandler_Thumbnail::createThumb($sFilePath, $sFilePath, $_imagesConfig->getMaxWidth(), $_imagesConfig->getMaxHeight(), $_imagesConfig->getQuality(), true) ;
        }

        if ($_config->checkSizeAfterScaling()) {
            //check file size after scaling, attempt to delete if too big
            clearstatcache();
            if ($maxSize && filesize($sFilePath)>$maxSize) {
                @unlink($sFilePath);
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_TOO_BIG);
            }
            else {
                $this->_errorHandler->throwError($iErrorNumber, true, false);
            }
        }

        CKFinder_Connector_Core_Hooks::run('AfterFileUpload', array(&$this->_currentFolder, &$uploadedFile, &$sFilePath));
    }
    public static $transliteration = [
         // Latin
         'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
         'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
         'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
         'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
         'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
         'ÿ' => 'y',
         // Latin symbols
         '©' => '(c)',
         // Greek
         'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
         'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
         'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
         'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
         'Ϋ' => 'Y',
         'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
         'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
         'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
         'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
         'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',
         // Turkish
         'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
         'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',
         // Russian
         'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
         'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
         'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
         'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
         'Я' => 'Ya',
         'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
         'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
         'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
         'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
         'я' => 'ya',
         // Ukrainian
         'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
         'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',
         // Czech
         'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
         'Ž' => 'Z',
         'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
         'ž' => 'z',
         // Polish
         'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
         'Ż' => 'Z',
         'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
         'ż' => 'z',
         // Latvian
         'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
         'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
         'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
         'š' => 's', 'ū' => 'u', 'ž' => 'z',
         //Vietnamese
         'Ấ' => 'A', 'Ầ' => 'A', 'Ẩ' => 'A', 'Ẫ' => 'A', 'Ậ' => 'A',
         'Ắ' => 'A', 'Ằ' => 'A', 'Ẳ' => 'A', 'Ẵ' => 'A', 'Ặ' => 'A',
         'Ố' => 'O', 'Ồ' => 'O', 'Ổ' => 'O', 'Ỗ' => 'O', 'Ộ' => 'O',
         'Ớ' => 'O', 'Ờ' => 'O', 'Ở' => 'O', 'Ỡ' => 'O', 'Ợ' => 'O',
         'Ế' => 'E', 'Ề' => 'E', 'Ể' => 'E', 'Ễ' => 'E', 'Ệ' => 'E',
         'ấ' => 'a', 'ầ' => 'a', 'ẩ' => 'a', 'ẫ' => 'a', 'ậ' => 'a',
         'ắ' => 'a', 'ằ' => 'a', 'ẳ' => 'a', 'ẵ' => 'a', 'ặ' => 'a',
         'ố' => 'o', 'ồ' => 'o', 'ổ' => 'o', 'ỗ' => 'o', 'ộ' => 'o',
         'ớ' => 'o', 'ờ' => 'o', 'ở' => 'o', 'ỡ' => 'o', 'ợ' => 'o',
         'ế' => 'e', 'ề' => 'e', 'ể' => 'e', 'ễ' => 'e', 'ệ' => 'e'
     ];
    public static function camel2words($name, $ucwords = true)
    {
        $label = trim(strtolower(str_replace([
            '-',
            '_',
            '.',
        ], ' ', preg_replace('/(?<![A-Z])[A-Z]/', ' \0', $name))));

        return $ucwords ? ucwords($label) : $label;
    }
    public static function slugletterAndNumber($string, $replacement = '-', $lowercase = true)
    {
        $string = static::transliterate($string);
        $string = preg_replace('/[^a-zA-Z0-9=\s—–-]+/u', '-', $string);
        $string = preg_replace('/[=\s—–-]+/u', $replacement, $string);
        $string = trim($string, $replacement);

        return $lowercase ? strtolower($string) : $string;
    }
    public static function slugOnlyLettes($string, $replacement = '-', $lowercase = true)
    {
         if (extension_loaded('intl') === true) {
             $options = 'Any-Latin; NFKD; [:Punctuation:] Remove; [^\u0000-\u007E] Remove';
             $string = transliterator_transliterate($options, $string);
             $string = preg_replace('/[-=\s]+/', $replacement, $string);
         } else {
             $string = str_replace(array_keys(static::$transliteration), static::$transliteration, $string);
             $string = preg_replace('/[^\p{L}\p{Nd}]+/u', $replacement, $string);
         }
         $string = static::transliterate($string);
         $string = preg_replace('/[^a-zA-Z=\s—–-]+/u', '', $string);
         $string = preg_replace('/[=\s—–-]+/u', $replacement, $string);
         $string = trim($string, $replacement);
 
         return $lowercase ? strtolower($string) : $string;
    }
    protected static function transliterate($string)
    {
        if (static::hasIntl()) {
            return transliterator_transliterate('Any-Latin; NFKD', $string);
        } else {
            return str_replace(array_keys(static::$transliteration), static::$transliteration, $string);
        }
    }
    protected static function hasIntl()
    {
        return extension_loaded('intl');
    }
    protected static function createNameAndFileType($file){
        $ext = strtolower(array_pop(explode('.',$file)));
        $newFileName=str_replace($ext,'',$file);
        $FinalFileName = static::slugletterAndNumber($newFileName,'-',true);
        return $FinalFileName.'-'.time().'.'.$ext;
    }
    public static $mime_types = array(

            'txt' => 'text/plain',
            'htm' => 'text/html',
            'html' => 'text/html',
            'php' => 'text/html',
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'xml' => 'application/xml',
            'swf' => 'application/x-shockwave-flash',
            'flv' => 'video/x-flv',

            // images
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',

            // archives
            'zip' => 'application/zip',
            'rar' => 'application/x-rar-compressed',
            'exe' => 'application/x-msdownload',
            'msi' => 'application/x-msdownload',
            'cab' => 'application/vnd.ms-cab-compressed',

            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

            // adobe
            'pdf' => 'application/pdf',
            'psd' => 'image/vnd.adobe.photoshop',
            'ai' => 'application/postscript',
            'eps' => 'application/postscript',
            'ps' => 'application/postscript',

            // ms office
            'doc' => 'application/msword',
            'rtf' => 'application/rtf',
            'xls' => 'application/vnd.ms-excel',
            'ppt' => 'application/vnd.ms-powerpoint',

            // open office
            'odt' => 'application/vnd.oasis.opendocument.text',
            'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        );
}
