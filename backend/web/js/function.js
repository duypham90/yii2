  $(document).ready(function () {
    $('body').delegate('.datepk','focusin',function(){
          var date = new Date();
          var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
          var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());
          $(this).datepicker({
              format : 'dd-mm-yyyy',
              todayHighlight: true,
              autoclose: true,
              //viewMode: "years",
              startDate: '-1y',
              endDate:  new Date(),
              daysMin: ["Chủ nhật", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
          });
      });
  });
  $(document).on('pjax:complete', function () {
        $("select.select2").each(function() {
            var a = $(this),
                b = a.attr("data-select-width") || "100%";
            a.select2({
                "allowClear": !0,
                "width": b
            }), a = null
        });
    });
  function BrowseServer( startupPath, functionData ){
    var finder = new CKFinder();
    finder.basePath = ckfinderUrl;
    finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
    finder.selectActionFunction = SetFileField;//hàm được gọi khi chọn 1 file 
    finder.selectActionData = functionData; //id của textfield hiện địa chỉ hình
    chooseFiles: true,
  //finder.selectThumbnailActionFunction = ShowThumbnails;  
    finder.popup(); // Bật cửa sổ CKFinder
  } //BrowseServer
  function SetFileField( fileUrl, data ){
    var arr = fileUrl.split('/frontend/web/');
    document.getElementById( data["selectActionData"] ).value = arr[1];
    $('.replace-image').attr("src",fileUrl);
  }
  $('.fa-question-circle').tooltip();

  function hideDatePicker(val){
    if(val.length<=0){
      $('.datepk').datepicker('hide');
    }
  }
  // convert price of product
  function addCommas(nStr) {
    var nStr = $.trim(nStr.replace(/,/g,''));
      nStr += '';
      var x = nStr.split('.');
      var x1 = x[0];
      if(x1>0){
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }else{
      return nStr;
    }
  } 