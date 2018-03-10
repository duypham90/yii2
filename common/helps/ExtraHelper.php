<?php
namespace common\helps;
class ExtraHelper{
    
    public static function makelink($lang, $slug, $hotel=''){
        if($hotel){
            return Yii::app()->baseUrl.'/'.$lang.'/'.$hotel.'/'.$slug .'.html';    
        }
        return Yii::app()->baseUrl.'/'.$lang.'/'.$slug.'.html';
    }
    public static function slug($string, $replacement = '-', $lowercase = true)    
    {
        $string = static::transliterate($string);
        $string = preg_replace('/[^a-zA-Z0-9=\s—–-]+/u', '', $string);
        $string = preg_replace('/[=\s—–-]+/u', $replacement, $string);
        $string = trim($string, $replacement); 
        return $lowercase ? strtolower($string) : $string;
    }

    public static function makeLinkPhoto($resize, $photo){
        if($resize){
            return Yii::app()->baseUrl.'/timthumb.php?src='.Yii::app()->baseUrl.'/uploads/cover/'.$photo.'&w='.$resize['w'].'&h='.$resize['h'];    
        }
        return Yii::app()->baseUrl.'/uploads/cover/'.$photo;    
    }
    public static function makeLinkPhotos($resize, $photo,$folder){
        if($resize){
            return Yii::app()->baseUrl.'/timthumb.php?src='.Yii::app()->baseUrl.'/uploads/'.$folder.'/'.$photo.'&w='.$resize['w'].'&h='.$resize['h'];    
        }
        return Yii::app()->baseUrl.'/uploads/'.$folder.'/'.$photo;    
    }
    
    public static function convert_json($text, $lang){
        if(isset($text[$lang])){
            return $text[$lang];
        }
        return '';
    }
    public static $gender = array(
        '' => 'Title',
        'Mr' => 'Mr',
        'Mrs' => 'Mrs',
        'Miss' => 'Miss'
    );
    public static function checkPermissionHotel($hotel_id){
        if(Users::checkPermissionHotel($hotel_id)==FALSE){
            throw new CHttpException(404,'404 Page Not Found OR You have not permision.');
        }
    }
    public static $user_status=array('A'=>'Active','P'=>'Pendding','U'=>'Unactive');
    public static $bookingStatus=array(
        'confirmed'=>'Confirmed',
        //'amended' => 'Amended',
        'failed' => 'Failed');
        //'cancelled'=>'Cancelled');
     public static function changeTitle($str){
        $unicode = array(
          'a'=>'á|à|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|ạ|á|ả|ã',
          'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|Ả',
          'd'=>'đ','D'=>'Đ',
          'e'=>'è|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|è|ễ|ẽ|é|ẻ|ẹ',
          'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
          'i'=>'í|ì|ỉ|ĩ|ị|ị','I'=>'Í|Ì|Ỉ|Ĩ|Ị',
          'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ó|ỏ|ọ|õ|õ|ồ|ò',
          'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
          'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ú|ự', 'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
          'y'=>'ý|ỳ|ỷ|ỹ|ỵ|ỹ','Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach($unicode as $khongdau=>$codau) {
          $arr = explode("|",$codau);
          $str = str_replace($arr,$khongdau,$str);
        }

        $str = str_replace(array('?','`','~','!','#','$','%','^','&','*','@','’','‘','(',')','_','+','=','/','\\','{','}','|',"'",'"',';','“','”',':',';','.','’','ä','‘','˚','-')," ",$str);
        //$str = str_replace(array('?','&','+','%',"'",'"','*','@','#','$','*',';','“','”',':','.','/','\\','}','{','|','=',')','(','`','~')," ",$str);
        $str = trim($str);
        while (strpos($str,'  ')>0) $str = str_replace("  "," ",$str);
        $str = mb_convert_case($str , MB_CASE_LOWER , 'utf-8');
        $str = str_replace(" ","-",$str);
        return $str;;
    }//changeTitle
    public static function limit_text( $text, $limit =25) {
        if ( strlen( $text ) < $limit ) {
            return $text;
        }
        $split_words = explode(' ', $text );
        $out = null;
        foreach ( $split_words as $word ) {
            if ( ( strlen( $word ) > $limit ) && $out == null ) {
                return substr( $word, 0, $limit );
            }         
            if (( strlen( $out ) + strlen( $word ) ) > $limit) {
                return $out;
            }            
            $out.=" " . $word;
        }
        return $out;
    }// limit_text
    public static function generateRandomString($length = 8,$loop=1, $number=false) {
        $randomstring = '';
        if ($length > 32) {
            $multiplier = round($length / 32, 0, PHP_ROUND_HALF_DOWN);
            $remainder = $length % 32;
            for ($i = 0; $i < $multiplier; $i++) {
                $randomstring .= substr(str_shuffle(md5(rand())), 0, 32);
            }
            $randomstring .= substr(str_shuffle(md5(rand())), 0, $remainder);
        }
        else{
            if($number){
                for($i=0;$i<$loop;$i++){
                    $randomstring .= mt_rand( 10000000, 99999999);
                }
            }else{
                $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
                $randomstring = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomstring .= $characters[mt_rand(0, strlen($characters) - 1)];
                }
            }
        }
        return $randomstring;
    }

    public static $cartType = [
        'visa' => 'Visa',
        'mastercard' => 'Master Card',
        'amex' => 'Amex',
        'jcb' => 'JCB'
    ];
    public static function year_to_now(){
        $default = 2015;
        $arr_year=array();
        if($default==date('Y')){
            $arr_year[$default]=$default;
        }else{
            for($i=$default;$i<date('Y');$i++){
                $arr_year[$i]=$i;
            }
        }
        return $arr_year;
    }
    public static function year(){
        $now = date('Y');
        $year=array();
        for($i=$now;$i<$now+10;$i++){
            $year[$i]=$i;
        }
        return $year;
    }
    public static function month(){
        $month = array();
        for($i=1;$i<=12;$i++){
            $add_zero=sprintf('%02d',$i);
            $month[$add_zero]= $add_zero;
        }
        return $month;
    }
    public static $currency = array(
        'VND' => 'Vietnamese Dong (VND)', //20
        'USD' => 'US Dollar (USD)', //1
        'EUR' => 'Euro (EUR)', //2
        'GBP' => 'British Pound (GBP)', //3
        'HKD' => 'Hong Kong Dollar (HKD)', //4
        'JPY' => 'Japanese Yen (JPY)', //5
        'CHF' => 'Swiss Franc (CHF)', //6
        'AUD' => 'Australian Dollar (AUD)', //7
        'CAD' => 'Canadian Dollar (CAD)', //8
        'SGD' => 'Singapore Dollar (SGD)', //9
        'THB' => 'Thai Baht (THB)', //10
        'DKK' => 'Danish Krone (DKK)', //11
        'INR' => 'Indian Rupee (INR)', //12
        'KRW' => 'Korean Won (KRW)', //13
        'MYR' => 'Malaysian Ringgit (MYR)', //14
        'KWD' => 'Kuwaiti Dinar (KWD)', //15
        'NOK' => 'Norwegian Krone (NOK)', //16
        'RUB' => 'Russian Ruble (RUB)', //17
        'SAR' => 'Saudi Riyal (SAR)', //18
        'SEK' => 'Swedish Krona (SEK)' //19
    );
    
	public static $status = array(
		0=> 'Publish',
		1=>'Unpublish'
	);

	public static function update_tracking_data(&$model, $update_type="") {
        $now = date('Y-m-d H:i:s');
        if (strtolower($update_type)=="create") {
            $model->added_date = $now;
        }
        $model->updated_date = $now;
        $model->updated_by = Yii::app()->user->id;
    }

    //write log 
    public static function writeLog($type, $object_type, $object_id, $object_name, $old_value, $new_value){
        
        if (Yii::app()->user->id<=0) {
            return FALSE;
        }

        $log = new Trackings;
            $log->type = $type;
            $log->object_id = $object_id;
            $log->object_type = $object_type;
            $log->object_name = $object_name;
            $old_value = ($old_value !== null ? $old_value->attributes : $old_value);
            $new_value = ($new_value !== null ? $new_value->attributes : $new_value);
        if($type !== 'delete'){         
            if($old_value !== null){
                $old_value = array_diff($new_value, $old_value);
                $new_ = '{';
                $i=0;
                foreach ($old_value as $key => $value) {
                    if(isset($new_value[$key])){
                        $new_ .= '"' . $key .'":' . '"' . $new_value[$key] .'"';
                        if($i>= count($old_value)-1){
                            $new_ .='';
                        }else{
                            $new_ .= ',';
                        }
                    }else{
                    }
                    $i++;
                }
                $new_ .= '}';
                $log->value = '{"old_value":['.json_encode($old_value).'], "new_value":[' .$new_ . ']}';
            }else{
                $log->value = '{"old_value":['.json_encode($old_value).'], "new_value":[' .json_encode($new_value) . ']}';
            }
        }else{
            $log->value = '{"old_value":['.json_encode($old_value).'], "new_value":[]}';
        }
        $log->date = date('Y-m-d H:i:s');
        $log->user_id = Yii::app()->user->id;       
        $log->save();

        return TRUE;    
    }
    
    public static function date_diff($date_1 , $date_2 , $format = '%a'){
        $date1=ExtraHelper::date_2_save($date_1);
        $date2=ExtraHelper::date_2_save($date_2);
        $datetime1 = date_create($date1['date']);
        $datetime2 = date_create($date2['date']);
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format($format);
    }

    public static function date_diff2($date_1, $date_2) {
        $date1=ExtraHelper::date_2_save($date_1);
        $date2=ExtraHelper::date_2_save($date_2);
        $datetime1 = date_create($date1['date']);
        $datetime2 = date_create($date2['date']);        
        $interval = date_diff($datetime1, $datetime2);
        if($datetime1 > $datetime2){
            return -1;
        }else{
            return 1;
        }
    }

    public static function date_2_save($str) {
        $str = strtolower(trim($str));
        $arr = $arr2 = array();
        if ($str) {
            $arr = explode("-", $str);
            $arr2 = explode("/", $str);
        }
        if (count($arr)<3 && count($arr2)<3) {
            return array('valid' => FALSE, 'error' => 'Invalid date format', 'date' => '');
        }
        if (count($arr)>=3) {
            $the_date = strtotime($arr[2] . "-" . $arr[1] . "-" . $arr[0]);
        } else {
            $the_date = strtotime($arr2[2] . "-" . $arr2[1] . "-" . $arr2[0]);
        }
        $date = date("Y-m-d", $the_date);
        if ($date=="1970-01-01") {
            if (count($arr)>=3) {
                if ((int)($arr[0])==1 && ((int)($arr[1])==1 || $arr[1]=='jan' || $arr[1]=='january')) {
                    return array('valid' => TRUE, 'error' => '', 'date' => $date);
                } else {
                    return array('valid' => FALSE, 'error' => 'Invalid date', 'date' => '');
                }
            } else {
                if ((int)($arr2[0])==1 && ((int)($arr2[1])==1 || $arr2[1]=='jan' || $arr2[1]=='january')) {
                    return array('valid' => TRUE, 'error' => '', 'date' => $date);
                } else {
                    return array('valid' => FALSE, 'error' => 'Invalid date', 'date' => '');
                }
            }       
        
        } else {
            return array('valid' => TRUE, 'error' => '', 'date' => $date);
        }
    }

    public static function time_2_show($date, $date_time_separator='', $format='') {
        $ret = '';
        if (!$date) {
            return '';
        }
        if ($date=='0000-00-00' || $date=='0000-00-00 00:00:00') {
            return '';
        }
        if (!$format) {
            $format = "d M Y H:i:s";
        }
        $ret = date($format, strtotime($date));
        if ($date_time_separator) {
            $ret = str_replace(' ', $date_time_separator, $ret);
        }
        return $ret;
    }   
    
    public static function expiry_time_2_show($date) {
        $ret = '';
        if (!$date) {
            return '';
        }
        if ($date=='0000-00-00 00:00:00') {
            return '';
        }
        
        $the_time = strtotime($date);
        $format = "H:i";
        $tmp = date($format, $the_time);
        if ($tmp=="00:00") {
            $format = "d M Y";
        } else {
            $format = "d M Y H:i";
        }
        
        $ret = date($format, $the_time);
        
        return $ret;
    }

    public static function date_2_show($date, $year='') {
        $ret = '';
        if (!$date) {
            return $year ? $year : '';
        }
        if ($date=='0000-00-00' || $date=='0000-00-00 00:00:00') {
            return $year ? $year : '';
        }
        return date("d-m-Y", strtotime($date));
    }

    public static function getListDistinct($object_name, $field_name, $condition=''){
        if (!$field_name) {
            return array();
        }
        $criteria=new CDbCriteria;
        $criteria->distinct = true;
        $criteria->select = array($field_name);
        
        if ($condition) {
            $criteria->addCondition($condition);
        }

        $dataProvider = new CActiveDataProvider($object_name, array(
            'criteria'=>$criteria,
        ));
        $dataProvider->setPagination(false);
        $arrTheList = array();
        $arrTheList = $dataProvider->getData();
        $arrCates = array();
        if(is_array($arrTheList)){
            foreach($arrTheList as $k => $v){
                $text = $v[$field_name];
                $tmp = trim($text);
                if ($tmp) {
                    $arrCates[$text] = $text;
                }
            }
        }
        asort($arrCates);
        return $arrCates;
    }
    
    public static $country = array(
        "PA7" => 'Afghanistan',
        "PA12" => 'Aland Islands',
        "PAL" => 'Albania',
        "PDZ" => 'Algeria',
        "PAD" => 'Andorra',
        "PAO" => 'Angola',
        "PA8" => 'Anguilla',
        "PAG" => 'Antigua and Barbuda',
        "PAR" => 'Argentina',
        "PAM" => 'Armenia',
        "PA11" => 'Aruba',
        "PAU" => 'Australia',
        "PAT" => 'Austria',
        "PAZ" => 'Azerbaijan', "PA2" => 'Bahamas', "PBH" => 'Bahrain', "PBD" => 'Bangladesh', "PBB" => 'Barbados',
        "PBY" => 'Belarus', "PBE" => 'Belgium', "PBZ" => 'Belize', "PBJ" => 'Benin', "PA13" => 'Bermuda', "PA14" => 'Bhutan',
        "PBO" => 'Bolivia', "PBA" => 'Bosnia And Hercegovina', "PBW" => 'Botswana', "PA27" => 'Bouvet Island',
        "PBR" => 'Brazil', "PA32" => 'British Indian Ocean Territory', "PA60" => 'British Virgin Islands', "PBN" => 'Brunei',
        "PBG" => 'Bulgaria', "PBF" => 'Burkina-Faso', "PBI" => 'Burundi', "PKH" => 'Cambodia', "PCM" => 'Cameroon', "PCA" => 'Canada',
        "PA17" => 'Cape Verde', "PA36" => 'Cayman Islands', "PCF" => 'Central African Republic', "PTD" => 'Chad', "PCL" => 'Chile',
        "PCN" => 'China', "PA18" => 'Christmas Island', "PA15" => 'Cocos - Keeling Islands',
        "PCO" => 'Colombia', "PA35" => 'Comoros', "PCG" => 'Congo-Brazzaville', "PA16" => 'Cook Islands', "PCR" => 'Costa Rica',
        "PHR" => 'Croatia', "PCU" => 'Cuba', "PCY" => 'Cyprus', "PCZ" => 'Czech Republic', "PCD" => 'Democratic Repub. of Congo',
        "PDK" => 'Denmark', "PDJ" => 'Djibouti', "PDM" => 'Dominica', "PDO" => 'Dominican Republic', "PEC" => 'Ecuador', "PEG" => 'Egypt',
        "PSV" => 'El Salvador', "PGQ" => 'Equatorial Guinea', "PER" => 'Eritrea', "PEE" => 'Estonia', "PET" => 'Ethiopia',
        "PA20" => 'Falkland Islands/Malvinas', "PA22" => 'Faroe Islands', "PA1" => 'Fiji Islands', "PFI" => 'Finland',
        "PFR" => 'France', "PGF" => 'French Guiana', "PPF" => 'French Polynesia', "PGA" => 'Gabon', "PGM" => 'Gambia', "PGE" => 'Georgia',
        "PDE" => 'Germany', "PGH" => 'Ghana', "PGI" => 'Gibraltar', "PGR" => 'Greece', "PA28" => 'Greenland', "PA23" => 'Grenada',
        "PGP" => 'Guadeloupe', "PA26" => 'Guam', "PGT" => 'Guatemala', "PA24" => 'Guernsey', "PGN" => 'Guinea', "PA29" => 'Guinea Bissau',
        "PGY" => 'Guyana', "PHT" => 'Haiti', "PA30" => 'Heard Island McDonald Islands', "PHN" => 'Honduras', "PA69" => 'Hong Kong',
        "PHU" => 'Hungary', "PIS" => 'Iceland', "PIN" => 'India', "PID" => 'Indonesia', "PIR" => 'Iran', "PIQ" => 'Iraq', "PIE" => 'Ireland',
        "PA31" => 'Isle of Man', "PIL" => 'Israel', "PIT" => 'Italy', "PCI" => 'Ivory  Coast', "PJM" => 'Jamaica', "PJP" => 'Japan',
        "PA33" => 'Jersey', "PJO" => 'Jordan', "PKZ" => 'Kazakhstan', "PKE" => 'Kenya', "PA34" => 'Kiribati', "PA71" => 'Kosovo',
        "PKW" => 'Kuwait', "PKG" => 'Kyrgyzstan', "PLA" => 'Lao people\'s democratic republic', "PLV" => 'Latvia', "PLB" => 'Lebanon',
        "PA40" => 'Lesotho', "PA39" => 'Liberia', "PLY" => 'Libya', "PA38" => 'Liechtenstein', "PLT" => 'Lithuania', "PLU" => 'Luxembourg',
        "PA70" => 'Macau', "PMK" => 'Macedonia', "PMG" => 'Madagascar', "PMW" => 'Malawi', "PMY" => 'Malaysia', "PA3" => 'Maldives',
        "PML" => 'Mali', "PMT" => 'Malta', "PA41" => 'Marshall Island Republic', "PMQ" => 'Martinique', "PMR" => 'Mauritania',
        "PMU" => 'Mauritius', "PYT" => 'Mayotte', "PMX" => 'Mexico', "PA21" => 'Micronesia Federated States Of', "PMD" => 'Moldova',
        "PMC" => 'Monaco', "PMN" => 'Mongolia', "PA68" => 'Montenegro', "PA43" => 'Montserrat', "PMA" => 'Morocco', "PMZ" => 'Mozambique',
        "PMM" => 'Myanmar', "PNA" => 'Namibia', "PA44" => 'Nauru', "PNP" => 'Nepal', "PNL" => 'Netherlands', "PA9" => 'Netherlands Antilles',
        "PNC" => 'New Caledonia', "PNZ" => 'New Zealand', "PNI" => 'Nicaragua', "PNE" => 'Niger', "PNG" => 'Nigeria', "PA45" => 'Niue',
        "PA6" => 'Norfolk Island', "PKP" => 'North Korea', "PA42" => 'Northern Mariana Islands', "PNO" => 'Norway', "POM" => 'Oman',
        "PPK" => 'Pakistan', "PA48" => 'Palau', "PA47" => 'Palestinian Territory', "PPA" => 'Panama', "PPG" => 'Papua new guinea',
        "PPY" => 'Paraguay', "PPE" => 'Peru', "PPH" => 'Philippines', "PA46" => 'Pitcairn', "PPL" => 'Poland', "PPT" => 'Portugal',
        "PPR" => 'Puerto Rico', "PQA" => 'Qatar', "PRE" => 'Reunion', "PRO" => 'Romania', "PRU" => 'Russia', "PRW" => 'Rwanda',
        "PSF" => 'Saint Barthelemy', "PA66" => 'Saint Helena', "PKN" => 'Saint Kitts and Nevis', "PA37" => 'Saint Lucia',
        "PA65" => 'Saint Martin', "PA10" => 'Samoa American', "PA64" => 'Samoa Western', "PSM" => 'San Marino',
        "PA52" => 'Sao Tome and Principe', "PSA" => 'Saudi Arabia', "PSN" => 'Senegal', "PA67" => 'Serbia', "PA50" => 'Seychelles Islands',
        "PSL" => 'Sierra Leone', "PSG" => 'Singapore', "PSK" => 'Slovakia', "PSI" => 'Slovenia', "PA49" => 'Solomon Islands',
        "PSO" => 'Somalia', "PZA" => 'South Africa', "PA25" => 'South Georgia South Sandwich Isl', "PKR" => 'South Korea',
        "PES" => 'Spain', "PLK" => 'Sri lanka', "PPM" => 'St Pierre and Miquelon', "PA59" => 'St Vincent and The Grenadines',
        "PSD" => 'Sudan', "PSR" => 'Suriname', "PA51" => 'Svalbard and Jan Mayen', "PA53" => 'Swaziland', "PSE" => 'Sweden',
        "PCH" => 'Switzerland', "PSY" => 'Syria', "PTW" => 'Taiwan', "PTJ" => 'Tajikistan', "PTZ" => 'Tanzania', "PTH" => 'Thailand',
        "PA55" => 'Timor Leste', "PTG" => 'Togo', "PA54" => 'Tokelau', "PA56" => 'Tonga', "PTT" => 'Trinidad and Tobago', "PTN" => 'Tunisia',
        "PTR" => 'Turkey', "PTM" => 'Turkmenistan', "PA4" => 'Turks and Caicos', "PA57" => 'Tuvalu', "PUG" => 'Uganda', "PUA" => 'Ukraine',
        "PAE" => 'United Arab Emirates', "PGB" => 'United Kingdom', "PUS" => 'United States', "PA58" => 'United States Minor Outlying Isl',
        "PUY" => 'Uruguay', "PUZ" => 'Uzbekistan', "PA62" => 'Vanuatu', "PVA" => 'Vatican', "PVE" => 'Venezuela', "PVN" => 'Vietnam',
        "PA61" => 'Virgin Islands US', "PA63" => 'Wallis and Futuna Islands', "PA19" => 'Western Sahara', "PYE" => 'Yemen', "PZM" => 'Zambia',
        "PZW" => 'Zimbabwe'
    );
}