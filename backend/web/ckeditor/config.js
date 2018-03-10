/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// config.toolbarGroups = [
	// 		{ name: 'document', groups: [ 'doctools', 'mode', 'document' ] },
	// 		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	// 		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
	// 		{ name: 'forms', groups: [ 'forms' ] },
	// 		'/',
	// 		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	// 		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
	// 		{ name: 'links', groups: [ 'links' ] },
	// 		{ name: 'insert', groups: [ 'insert' ] },
	// 		'/',
	// 		{ name: 'styles', groups: [ 'styles' ] },
	// 		{ name: 'colors', groups: [ 'colors' ] },
	// 		{ name: 'tools', groups: [ 'tools' ] },
	// 		{ name: 'others', groups: [ 'others' ] },
	// 		{ name: 'about', groups: [ 'about' ] }
	// 	];
		//config.removeButtons = 'Save,NewPage,Preview,Print,Cut,Templates,Copy,Paste,PasteText,PasteFromWord,Redo,Undo,Find,Replace,Scayt,SelectAll,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Form,Checkbox,Superscript,Subscript,Strike,About,Maximize,ShowBlocks,Flash';
		// config.filebrowserBrowseUrl  = '../../ckfinder/ckfinder.html';
  //       config.filebrowserImageBrowseUrl = '../../ckfinder/ckfinder.html?Type=Images';
  //       config.filebrowserUploadUr = '/ckfinder/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
  //       config.filebrowserImageUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
  //       config.filebrowserWindowWidth = '1000';
  //       config.filebrowserWindowHeight ='700';

        config.filebrowserBrowseUrl = 'http://localhost/yii2/ckfinder/ckfinder.html';
		config.filebrowserImageBrowseUrl = 'http://localhost/yii2/ckfinder/ckfinder.html?type=Images';
		config.filebrowserFlashBrowseUrl = 'http://localhost/yii2/ckfinder/ckfinder.html?type=Flash';
		config.filebrowserUploadUrl = 'http://localhost/yii2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		config.filebrowserImageUploadUrl = 'http://localhost/yii2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
		config.filebrowserFlashUploadUrl = 'http://localhost/yii2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
