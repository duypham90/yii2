function applyEditor() {
    try {

        CKEDITOR.replace( $(this).attr('id'), {
            //customConfig : '../ckeditor/custom_config.js',

            toolbarGroups : [ {"name" : "basicstyles",
                "groups" : [ "basicstyles", "cleanup" ]
            }, {
                "name" : "links",
                "groups" : [ "links" ]
            }, {
                "name" : "insert",
                "groups" : [ "insert" ]
            }, {
                "name" : "paragraph",
                "groups" : [ "list", "blocks", "align" ]
            },
            {
                "name" : "styles"
            },
            {
                "name" : 'colors'
            }, {
                "name" : 'editing',
                "groups" : [ 'find', 'selection', 'spellchecker' ]
            }, ],
            removeButtons : 'Image,Flash,Iframe'
        });
    } catch (e) {
        // TODO: handle exception
    }
}