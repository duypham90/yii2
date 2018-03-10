<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="box-product">
        <div class="post-image"><a href=""><img src="img/room/room-1.jpg" alt="" class="img-responsive"></a></div>
        <div class="post-body">
            <h3><a href="#"><?=$model['name'];?></a></h3>
            <div class="post-content" style="display:none">
                <p data-number-line="3">Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage</p>
            </div>
            <div class="post-footer">
                <p class="price">
                    <?=$model['price']; ?> <span class="small">/ Night</span>
                </p>
                <!-- <a href="cart/<?=$model['id']; ?>" class="btn btn-classic">View data details<span class="icon-btn-arrow"><span class="inner">&nbsp;</span></span>
                </a> -->
                <a href="javascript:void(0)" class="btn btn-classic addToCart" data-name="<?=$model['name']; ?>" data-id="<?=$model['id'];?>">
                    Add to Cart
                    <span class="icon-btn-arrow">
                        <span class="inner">&nbsp;</span>
                    </span>
                </a>
            </div>
        </div>          
    </div>
</div>
