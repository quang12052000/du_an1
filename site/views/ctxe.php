<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: center;
}

/* The actual popup */
.popup .popuptext {
    float: left;
  visibility: hidden;
  width: 2500px;
  min-height: 450px;
  background-color: #555;
  color: black;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 8s;
  animation: fadeIn 2s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>
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
                                <h4 class="price">Giá Thuê:  <?=$ctxe['Gia_thue']?>đ/ngày</h4>
                                </p>
                                <table>
                                <p>ĐẶC ĐIỂM</p>
                                <h6>Số ghế: <?=$ctxe['Loaixe']?></h6>
                                <span>Tinh nang: <?=$ctxe['tinh_nang']?></span>
                                
                                <h5>Nhiên liệu: <?=$ctxe['Nhien_lieu']?></h5>
                                <!-- popup -->
                                    <div class="popup" onclick="myFunction()"><input type="button" value="Thuê Ngay" class="button">
                                    <span class="popuptext" id="myPopup">
                                        <form action="">
                                            <h1>Điền Thông Tin Đặt Xe</h1>
                                            <h6>họ tên</h6>
                                            <input type="datetime" name="" id="">
                                            <h6>sdt</h6>
                                        </form>
                                    </span>
                                    </div>
                                    <script>
                                    // When the user clicks on div, open the popup
                                    function myFunction() {
                                    var popup = document.getElementById("myPopup");
                                    popup.classList.toggle("show");
                                    }
                                    </script>
                            </table>
                    </div>
                </div>
            </div>
        </div>

    </div>