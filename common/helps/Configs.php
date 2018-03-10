<?php
namespace common\helps;
class Configs {
    public static $orderStatus=array(
          0=>'Đơn hàng mới',
          1 => 'Xác nhận giao hàng',
          -1 => 'Đã hủy',
          2=>'Đã giao hàng'
    );
    public static $orderStatusCss=array(
          0  => 'css-icon-new',
          1  => 'css-icon-confirmation',
          -1 => 'css-icon-cancel',
          2  => 'css-icon-delivered'
    );
    public static $status = array(
      0=> 'Hiện',
      1=>'Ẩn'
    );
    public static function languages(){
      return array(
            'en' => 'English',
            'vi' => 'Tiếng Việt',
            'ja' => '日本語',
            'ko' => '한국어'
      );
    }
    public static function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

        if(strlen($phoneNumber) > 10) {
            $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
            $areaCode = substr($phoneNumber, -10, 4);
            $nextThree = substr($phoneNumber, -6, 3);
            $lastFour = substr($phoneNumber, -3, 3);
            $phoneNumber = $countryCode.$areaCode.' '.$nextThree.' '.$lastFour;
            //$phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
        }
        else if(strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 4);
            $nextThree = substr($phoneNumber, 4, 3);
            $lastFour = substr($phoneNumber, 7, 3);
            $phoneNumber = $areaCode.' '.$nextThree.' '.$lastFour;
        }
        else if(strlen($phoneNumber) == 7) {
            $nextThree = substr($phoneNumber, 0, 3);
            $lastFour = substr($phoneNumber, 3, 4);

            $phoneNumber = $nextThree.'-'.$lastFour;
        }

        return $phoneNumber;
    }
    public static function showMenuTree($categories, $parent_id = 0, $char = '', &$array){
      foreach ($categories as $key => $item){
          if ($item['parent_id'] == $parent_id){
                  $array[$item['id']] = $char. $item['name'];
              unset($categories[$key]);
              static::showMenuTree($categories, $item['id'], $char.'--', $array);
          }
      }
      return $array;
  }
  public static function create_update_footer_fixed(){

          $html = '<button type="submit" class="btn btn-labeled btn-success css-btn" name="save">Thêm</button>';
          $html .= '<button type="submit" class="btn btn-labeled btn-success css-btn" name="save-create">Lưu & Thêm mới</button>';

        echo $html;
  }
  public static function updateButton(){
      $html = '<button type="submit" class="btn btn-labeled btn-success css-btn" name="save">Save</button>';
      echo $html;
  }
}