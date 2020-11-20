<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .container-fliud{
        margin-top: 200px;
    }
    .tab-pane img{
        min-height: 600px;
        width: 1000px;
    }
    .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;    
    }
    .btn-default{
        width: 100px;
        height: 50px;
        background-color: aquamarine;
        font-size: 12pt;
    }
</style>
    <div class="container" style=" margin-left:100px;">
        <div class="container-fliud">
            <div class="wrapper row" style="width: 1500px;">
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
                    </div>
                    
                </div>
                <div class="details col-md-6    ">
                    <div class="form-thuexe" style="width:100%; height: 900px;">
                    <h3 class="product-title" style="color: black; font-weight: bolder;"><?=$ctxe['Ten_xe']?></h3>
                                <div class="rating">
                                    <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                                    </div> <span class="review-no">Số lượt xem : <?=$ctxe['Soluotxem']?></span>
                                </div>
                                <p class="product-description"></p><?=$ctxe['mota']?></p>
                                  <h4 class="price">Giá Thuê: <span><?=number_format($ctxe['Gia_thue'],0,'.','.')?>VNĐ/ngày</span></h4>
                                </p>
                                <table>
                                <p>ĐẶC ĐIỂM</p>
                                <h6>Số ghế: <?=$ctxe['Loaixe']?></h6>
                                <span>Tinh nang: <?=$ctxe['tinh_nang']?></span>
                                
                                <h5>Nhiên liệu: <?=$ctxe['Nhien_lieu']?></h5>
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thuê Xe Ngay</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                        
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="">
                                                <center>
                                                <h1>Thông Tin Của Bạn</h1>
                                                <h3>Họ Và Tên</h3>
                                                <input type="text" name="hoten">
                                                <h3>Số Điện Thoại</h3>
                                                <input type="text" name="sdr">
                                                <h3>Email</h3>
                                                <input type="text" name="email">
                                                <h3>Địa Chỉ</h3>
                                                <input type="text" name="email">
                                                </center>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Hoàn Tất</button>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                            </table>
                    </div>
                </div>
            </div>
        </div>

    </div>