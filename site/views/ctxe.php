



    <div class="container">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="./site/views/images/<?=$ctxe['hinh_xe']?>" alt="">
                        </div>
                        <!-- <div class="tab-pane" id="pic-2"><img src="images/product/details/1.jpg">
                        </div>
                        <div class="tab-pane" id="pic-3"><img src="images/product/details/2.jpg">
                        </div>
                        <div class="tab-pane" id="pic-4"><img src="images/product/details/3.jpg">
                        </div>
                        <div class="tab-pane" id="pic-5"><img src="images/product/details/4.jpg">
                        </div> -->
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active">
                                <a data-target="#pic-1" data-toggle="tab"><img src="./site/views/images/<?=$ctxe['hinh_xe']?>"></a>
                            </li>
                            <!-- <li>
                                <a data-target="#pic-2" data-toggle="tab"><img src="images/product/details/1.jpg"></a>
                            </li>
                            <li>
                                <a data-target="#pic-3" data-toggle="tab"><img src="images/product/details/2.jpg"></a>
                            </li>
                            <li>
                                <a data-target="#pic-4" data-toggle="tab"><img src="images/product/details/3.jpg"></a>
                            </li>
                            <li>
                                <a data-target="#pic-5" data-toggle="tab"><img src="images/product/details/4.jpg"></a>
                            </li> -->
                        </ul>
                        <div class="thongtin" style="width: 100%; background-color: darkkhaki; min-height: 500px; margin-top: 30px;">
                            <table>
                                <p>ĐẶC ĐIỂM</p>
                                <h6>Số ghế: <?=$ctxe['Loaixe']?></h6>
                                <span>Tinh nang: <?=$ctxe['tinh_nang']?></span>
                                
                                <h5>Nhiên liệu: <?=$ctxe['Nhien_lieu']?></h5>
                               
                                <!-- <strong></strong> -->
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title" style="color: black; font-weight: bolder;"><?=$ctxe['Ten_xe']?></h3>
                                <div class="rating">
                                    <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                    </div> <span class="review-no">Số lượt xem : <?=$ctxe['Soluotxem']?></span>
                                </div>
                                <p class="product-description"></p><?=$ctxe['mota']?></p>
                                <h4 class="price">Giá Thuê:  <?=$ctxe['Gia_thue']?>đ/ngày</h4>
                                </p>
                    <div class="form-thuexe" style="width:100%; border: 1px black solid ; height: 900px; border-radius: 20px 20px 20px; box-shadow: slategray 5px 10px 10px 5px;">
                        <form>
                            <center><div class="form-group">
                                <h1 style="position: absolute; margin-left: 130px; margin-top: -35px; color: green; font-weight: bold; text-shadow: gray 10px 5px 10px; z-index: 999;">THÔNG TIN</h1>
                                <br>
                              <label for="exampleInputEmail1"><span class="d-block text-black" style="font-size: 18pt; margin-right: 200px;">Họ tên khách Hàng</span></label>
                              <input type="hoten" class="form-control" id="hoten" aria-describedby="hoten" style="width:85%" placeholder="Họ và Tên">
                              <small id="hoten" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><span class="d-block text-black" style="font-size: 18pt; margin-right: 200px;">Địa chỉ khách Hàng</span></label>
                              <input type="diachi" class="form-control" id="diachi"style="width:85% " placeholder="Địa Chỉ">
                            </div>
                            <div class="form-group">
                                <label for="sdt"><span class="d-block text-black" style="font-size: 18pt; margin-right: 250px;">Số Điện Thoại</span></label>
                                <input type="sdt" class="form-control" id="sdt"style="width:85%" placeholder="Số Điện Thoại">
                              </div>
                            <div class="form-group">
                               <label for="gmail"><span class="d-block text-black" style="font-size: 18pt; margin-right: 200px;">Gmail Khách Hàng</span></label>
                               <input type="gmail" class="form-control" id="gmail"style="width:85%" placeholder="Gmail">
                            </div>
                              <span class="d-block text-black" style="font-size: 18pt; margin-right: 200px;">Thời Gian bắt đầu:</span>
                              <div class="form-control-wrap">
                                <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3" style="width:85%">
                                <span class="icon icon-date_range"></span>
                              </div>
                            <span class="d-block text-black"style="font-size: 18pt; margin-right: 200px;">Thời Gian Kết Thúc:</span></li>
                            <div class="form-control-wrap">
                              <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3" style="width:85%">
                              <span class="icon icon-date_range"></span>
                            </div>
                            <br>    
                            <div class="action">
                                <a href="contact.html" target="_blank"> <button class="add-to-cart btn btn-default" type="button">Đặt Xe NGAY</button> </a>
                                <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                            </div>  
                            </center>
                          </form>
                    </div>
                </div>
            </div>
        </div>

    </div>