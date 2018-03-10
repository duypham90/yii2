CKEDITOR.editorConfig = function( config ) {
	config.height =500; 
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'document', 'mode', 'doctools' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
	config.removeButtons = 'NewPage,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Replace,Find,SelectAll,Button,ImageButton,HiddenField,TextField,CopyFormatting,RemoveFormat,BidiLtr,BidiRtl,Language,Flash,HorizontalRule,Smiley,SpecialChar,Iframe,PageBreak,ShowBlocks,About,CreateDiv,Strike,Subscript,Superscript,Select,Textarea,Save,Radio,Checkbox,Scayt,Anchor,Form';
	config.filebrowserBrowseUrl = '../ckeditor/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = '../ckfinder/ckfinder.html?type=Images';
    config.filebrowserImageUploadUrl = '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserUploadUrl = '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
};