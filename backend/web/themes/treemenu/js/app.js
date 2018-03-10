var tv = window.tv || (window.tv = {});

tv.renderTree = function () {
    console.log('render treeview');
    $('.render-tv').treeview({
        collapsetv: true
    });
}

$(document).ready(function () {
    tv.renderTree();
});