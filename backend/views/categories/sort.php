<?php
$this->title = 'Orders';
$this->params['breadcrumbs'][] = ['label' => 'Sắp xếp menu', 'url' => ['index']];


function has_children($rows,$id) {
  foreach ($rows as $row) {
    if ($row['parent_id'] == $id)
      return true;
  }
  return false;
}
function createTreeView($array, $IdParent = 0,$level=0) {
        echo '<ol class="dd-list">';
        foreach ($array as $categoryId => $category) {
            if ($category->parent_id== $IdParent) {        
              echo '<li class="dd-item" data-id="'.$category->id.'" data-order="'.$category->display_order.'" data-parent="'.$level.'">';
                    echo '<div class="dd-handle">';
                            echo '<span>'.$category->name.'</span>';
                    echo '</div>';
                    unset($array[$categoryId]);
                    if(has_children($array,$category->id)){
                       createTreeView($array, $category->id,$level+1);
                    }
                echo '</li>';             
            }
        }
        echo '</ol>'; 
}
?>

<div class="panel panel-default">
    <div class="panel-heading">Sắp xếp thứ tự danh mục hiển thị</div>
    <div class="panel-body">

        <div class="col-md-4">
            <div class="dd" id="nestable">
                <?php 
                createTreeView($model,0);
                ?>
                <textarea style="display:none" id="nestable-output" rows="3" class="form-control font-md"></textarea>
            </div>
        </div>
        <div class="col-md-3">
            <div id="nestable-menu">
                <div style="padding:5px 10px;">
                     <button type="button" class="btn btn-default w100" data-action="expand-all">
                        Expand All
                    </button>
                </div>
                <div style="padding:5px 10px;">
                    <button type="button" class="btn btn-default w100" data-action="collapse-all">
                        Collapse All
                    </button>
                </div>
                <div style="padding:5px 10px;">
                    <button class="btn btn-success w100" id="updateCate">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
    var updateOutput = function(e) {
        var list = e.length ? e : $(e.target), output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };
    $('#nestable').nestable({
        group : 1
    }).on('change', updateOutput);
    $('#nestable').nestable('collapseAll');
    updateOutput($('#nestable').data('output', $('#nestable-output')));

    $('#nestable-menu').on('click', function(e) {
        var target = $(e.target), action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });
  });
</script>
<script>
    $('#updateCate').click(function() {
        var arr= $('#nestable-output').val();
        //console.log(arr);
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        console.log(csrfToken);
        if(arr!=''){
            $.ajax({
                url: 'updatesort',
                type: 'POST',
                dataType: 'json',
                data: {arrList:arr, _csrf: csrfToken},
                success:function(data){
                    $.notify("Cập nhật thành công", {align:"center", verticalAlign:"middle",color: "#fff", background: "#D44950",close: true});
                    // $.notify("Hello World!", {class:"my-class", delay:0, align:"center", verticalAlign:"middle", animationType:"scale"});
                }
            })
            // .done(function() {
            //     console.log("success");
            // })
            // .fail(function() {
            //     console.log("error");
            // })
            // .always(function() {
            //     console.log("complete");
            // });
        }
    });  
</script>