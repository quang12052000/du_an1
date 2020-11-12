<div class="container">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="./site/views/images/<?=$ctxe['hinh_xe']?>" alt="">
                        </div>
                        <!-- <div class="tab-pane" id="pic-2"><img src="images/car_3.jpg">
                        </div>
                        <div class="tab-pane" id="pic-3"><img src="images/car_4.jpg">
                        </div>
                        <div class="tab-pane" id="pic-4"><img src="images/car_5.jpg">
                        </div>
                        <div class="tab-pane" id="pic-5"><img src="images/car_6.jpg">
                        </div> -->
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">


                        <li class="active">
                            <a data-target="#pic-1" data-toggle="tab"><img src="./site/views/images/<?=$ctxe['hinh_xe']?>"></a>
                        </li>
                        <!-- <li>
                            <a data-target="#pic-2" data-toggle="tab"><img src="images/car_3.jpg"></a>
                        </li>
                        <li>
                            <a data-target="#pic-3" data-toggle="tab"><img src="images/car_4.jpg"></a>
                        </li>
                        <li>
                            <a data-target="#pic-4" data-toggle="tab"><img src="images/car_5.jpg"></a>
                        </li>
                        <li>
                            <a data-target="#pic-5" data-toggle="tab"><img src="images/car_6.jpg"></a>
                        </li> -->
                    </ul>
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?=$ctxe['Ten_xe']?></h3>
                    <div class="rating">
                        <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                        </div> <span class="review-no"><?=$ctxe['Soluotxem']?></span>
                    </div>
                    <p class="product-description"></p><?=$ctxe['tinh_nang']?></p>
                    <h4 class="price">Giá Thuê: <?=$ctxe['Gia_thue']?>đ/ngày</h4>

                    </p>

                    <div class="action">
                        <a href="contact.html" target="_blank"> <button class="add-to-cart btn btn-default" type="button">Thuê NGAY</button> </a>
                        <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                    </div>
                </div>
            </div>
        </div>

    </div>