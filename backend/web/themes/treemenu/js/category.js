(function (global) {    
    global.arrData = [];
	var HandleMT = window.HandleMT || (window.HandleMT = {});
})(this);

HandleMT.loadCates = function() {
	var cates = $('.category'),
		valueCates = (cates.val()).split(',');			// lay value cua input category push vao mang valueCates
	
	var checkBox = $('.dd-handle');
	checkBox.each(function(){				
	//Duyet qua tat ca item
		var that = $(this),
			checkState = that.find('input[type=checkbox]').prop('checked'),
			// lay status checked cua input
			value = that.find('input[type=checkbox]').val(),
			// lay value cua item
			i = 0;
		
		for( ; i < valueCates.length; i++ ) {
			//tim trong item co gia tri == valueCates[i] roi active checkbox
			if(value == valueCates[i]) {
				if(!checkState) {
					that.find('input[type=checkbox]').prop('checked', true);
				}
				//console.log('active', value);
			}
		}
		arrData = valueCates;
	});
	
}

$(document).ready(function () {
	
	HandleMT.loadCates();
	
    var sortData = function (arr) {
        arr.sort(function (a, b) { return a - b });
    }
    var removeElem = function (elem) {
        var index;
        for (var i = 0; i < arrData.length; i++) {
            index = arrData.indexOf(elem);
            if (index > -1) {
                arrData.splice(index, 1);
                sortData(arrData);
                break;
            }
        }
    }
    var addElem = function (elem) {
        arrData.push(elem);
        sortData(arrData);
    }

    var ddItem = $('.dd-item');
    ddItem.each(function (idx, elem) {
        var controls = '<button class="btnControl" data-action="collapse" type="button">Collapse</button>';
        controls = $(controls);
        var ol = $(elem).find(' > .item').next('ol').length;
        if (ol > 0) {
            $(elem).find(' > .item').prepend(controls).addClass('dd-collapse');
        }
    });
    $('.btnControl').off('click').on('click', function (evt) {
        evt.preventDefault();
        var that = $(this),
        dataAction = that.attr('data-action');
        if (dataAction == 'collapse') {
            that.attr('data-action', 'expand');
            that.closest('.dd-item').find('> ol').hide();

        }
        else {
            that.attr('data-action', 'collapse');
            that.closest('.dd-item').find('> ol').show();
        }
    });
    var checkBox = $('.dd-handle');
    checkBox.find('label').off('click').on('click', function (evt) {
        evt.preventDefault();
    });
    checkBox.off('click').on('click', function (evt) {
        var that = $(this),
            checkState = that.find('input[type=checkbox]').prop('checked'),
            text = that.text(),
            value = that.find('input[type=checkbox]').val();
       
        if (checkState) {
            that.find('input[type=checkbox]').prop('checked', false);
            removeElem(value);
            console.log('remove')
        }
        else {
            that.find('input[type=checkbox]').prop('checked', true);
            addElem(value);
            console.log('add')
        }
        console.log(JSON.stringify(arrData,null,2))
        $('.category').val(arrData.join(','));
    });
});