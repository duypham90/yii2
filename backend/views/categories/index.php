<?php
$this->title = 'Danh mục';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
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
<div class="categories-index">
    <section id="widget-grid" class="">
        <div class="row">
            <article class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Sắp xếp thứ tự</h2>               
                    </header>
                    <div class="no-border">
                        <div class="jarviswidget-editbox"></div>
                        <div class="widget-body no-padding">
                            <div class="dd" id="nestable">
                                <?php 
                                createTreeView($sort,0);
                                ?>
                                <textarea style="display:none" id="nestable-output" rows="3" class="form-control font-md"></textarea>
                            </div>                    
                        </div>
                    </div>
                    <footer class="text-center">
                        <button class="btn btn-success" id="updateCate">Cập nhật</button>
                    </footer>
                </div>            
            </article>
            <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2><?=$this->title; ?></h2>
                        <div class='widget-toolbar'>
                            <!-- <a id="css-btn" class="btn btn-labeled btn-success" href="sort">
                            <span class="btn-label"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>Sắp xếp Danh Mục</a>  -->
                            <a id="css-btn" class="btn btn-labeled btn-success" href="create"><span class="btn-label"><i class="fa fa-plus"></i></span>Add New</a>
                        </div>                
                    </header>
                    <div class="no-border">
                        <div class="jarviswidget-editbox"></div>
                        <div class="widget-body no-padding">
                        <?= $this->render('grid', ['dataProvider' => $dataProvider,'searchModel'=>$searchModel,'arrcate'=>$arrcate]) ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
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