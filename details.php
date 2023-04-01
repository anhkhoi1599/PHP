<?php include_once 'inc/header.php'; ?>
<?php
error_reporting(0);
if (!isset($_GET['MaSanPham']) || $_GET['MaSanPham'] == NULL) {
    echo "<script>window.location = '404.php'</script>";
} else {
    $id = $_GET['MaSanPham'];
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $SoLuong = $_POST['SoLuongAdd'];
    $MaSanPham =  $_POST['MaSanPham'];
    $sId = session_id();
    $addToCart = $cart->add_to_cart($MaSanPham, $SoLuong, $sId);
}

?>
<style>
    .user-input_ct {
        width: 100%;
        padding: 5px 10px;
        border: 1px solid var(--gray);
        border-color: var(--border-input-color);
        border-radius: 10px;
    }
</style>
<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <?php
    if (isset($addToCart)) {
        echo $addToCart;
    }
    
    ?>
    <div class="container">
        <?php
        $get_details_id = $product->get_details_id($id);
        if ($get_details_id) {
            while ($product_details = $get_details_id->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="img-fit detail" style="background-image: url('./admin/<?php echo $product_details['HinhChinh']; ?>'),url('./admin/images/default.png');"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-fit detail" style="background-image: url('./admin/<?php echo $product_details['HinhChinh']; ?>'),url('./admin/images/default.png');"></div>

                                </div>
                                <div class="carousel-item">
                                    <div class="img-fit detail" style="background-image: url('./admin/<?php echo $product_details['HinhChinh']; ?>'),url('./admin/images/default.png');"></div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                            <ol class="carousel-indicators" style="background-color: #2fa564;">
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img onerror="this.src='images/default.png'" class="d-block w-100 img-fluid" src="./admin/<?php echo $product_details['HinhChinh']; ?>" alt="" />
                                </li>
                                <li data-target="#carousel-example-1" data-slide-to="1">
                                    <img onerror="this.src='./admin/images/default.png'" class="d-block w-100 img-fluid" src="./admin/<?php echo $product_details['HinhChinh']; ?>" alt="" />
                                </li>
                                <li data-target="#carousel-example-1" data-slide-to="2">
                                    <img onerror="this.src='./admin/images/default.png'" class="d-block w-100 img-fluid" src="./admin/<?php echo $product_details['HinhChinh']; ?>" alt="" />
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="single-product-details">
                            <h2> <?php echo $product_details['TenSanPham']; ?> </h2>
                            <h5> <?php echo number_format($product_details['Gia'], 0, '', ',') . " vnđ"; ?> </h5>
                            <p class="available-stock font-weight-bold text-color ">
                                Có sẵn:
                                <span class="font-weight-normal text-lowercase"> <?php echo $product_details['SoLuongTonKho']; ?> </span> -
                                <span class="bg-primary text-white p-1 full-radius font-weight-normal"> Đã bán: <?php echo $product_details['SoLuongDaBan']; ?> </span>
                            <p>
                            <p class="available-stock font-weight-bold text-color  mt-1 mb-1">
                                Loại:
                                <span class="font-weight-normal"><?php echo $product_details['TenDanhMucCon']; ?></span>
                            <p>
                            <p class="available-stock font-weight-bold text-color  mt-1 mb-1">
                                Thương hiệu:
                                <span class="font-weight-normal"><?php echo $product_details['TenNhaSanXuat']; ?></span>
                            <p>
                            <p class="available-stock font-weight-bold text-color  mt-1 mb-1">
                                Điểm:
                                <span class="font-weight-normal"><?php echo $product_details['Diem']; ?></span>
                            <p>
                            
                            <h4>Mô Tả:</h4>
                            <p class="description-detail__product"> <?php echo $product_details['MoTa']; ?> </p>
                            <form action="" method="post">
                                <ul>
                                    <li class="max-width-mobile">
                                        <div class="quantity-box mb-1">
                                            <label class="control-label text-color mt-1">Số Lượng</label>
                                        </div>
                                        <div>
                                            <input class="user-input" value="1" min="1" name="SoLuongAdd" id="soluong" type="number" style="    text-align: center; margin: 0 10px; min-width: 100px; border-radius: var(--input-corner-radius); margin-bottom: 20px; width: 100%;" />
                                        </div>
                                    </li>
                                </ul>
                                <input hidden name="masanpham" id="masanpham" value="" />
                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn max-btn">
                                        <!-- <input type="text" hidden name="SoLuongAdd" value="1" /> -->
                                        <input type="text" hidden name="MaSanPham" value="<?php echo $product_details['MaSanPham']; ?>" />
                                        <input type="submit" name="submit" class="ml-auto add-cart-notify btn hvr-hover max-width-mobile font-weight-bold text-capitalize p-2" value="Thêm vào giỏ">
                                    </div>

                                    

                                   

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
        <div class="row" style="margin-top: 80px">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1 data-aos="fade-up" data-aos-easing="linear">Sản phẩm liên quan</h1>
                    <p data-aos="fade-up" data-aos-easing="linear">Chất lượng hàng đầu chúng tôi số 2 không ai số 1</p>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <?php
            $MaDanhMucCon = $product_details['MaDanhMucCon'];
            $product_buys = $product->getproduct_lienquan($MaDanhMucCon);
            if ($product_buys) {
                while ($buys = $product_buys->fetch_assoc()) {
            ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 special-grid best-seller">
                        <div class="products-single fix shadow full-radius">
                            <div class="box-img-hover none-radius">
                                <div class="type-lb show">
                                    <p class="hot bottom-left-radius">Best Sale</p>
                                </div>
                                <div class="img-fit product-mobile " style="background-image: url('./admin/<?php echo $buys['HinhChinh'] ?>')">
                                </div>
                                <div class="mask-icon">
                                    <form action="" method="POST">
                                        <ul>
                                            <li><a href="details.php?MaSanPham=<?php echo $buys['MaSanPham']; ?>" data-toggle="tooltip" data-placement="right" title="Chi tiết"><i class="fas fa-eye"></i></a></li>
                                            
                                        </ul>
                                        <a class="cart add-cart-notify text-capitalize hide-in-mobile font-weight-bold" href="details.php?MaSanPham=<?php echo $buys['MaSanPham']; ?>" name="submit">Xem chi tiết</a>
                                        <!-- <input type="text" hidden name="SoLuong" value="1" />
                                    <input type="text" hidden name="MaSanPham" value="<?php echo $buys['MaSanPham']; ?>" />
                                    <input type="submit" name="submit" class="cart add-cart-notify text-capitalize hide-in-mobile font-weight-bold" value="Thêm vào giỏ">  -->
                                    </form>
                                </div>
                            </div>
                            <div class="why-text view-row-content">
                                <h4><?php echo $buys['TenSanPham'] ?></h4>
                                <h5><?php echo number_format($buys['Gia'], 0, '', ','); ?> vnđ</h5>
                                <a href="" class="btn register hvr-hover text-capitalize add-cart-notify max-width-mobile show-in-mobile font-weight-bold font-size-mobile mt-1">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <?php
            }
        }
        ?>





        </div>

    </div>
    <div class="flex-column text-center mt-4 mb-4 d-flex align-items-center">
    <div class="ml-auto add-cart-notify btn hvr-hover max-width-mobile font-weight-bold text-capitalize p-2" style="margin: auto; width: 100px;">
        <button onclick="history.back()" style="background: transparent;
    border-color: transparent;
    color: white;">Trở lại</button>
    </div>
</div>
</div>
<?php

?>
<!-- End Shop Detail -->
<script>
    
    /* ..............................................
        Thông báo thêm quá số lượng sản phẩm tồn kho
       ................................................. */
    function ThongBaoQuaSoLuong() {
        if (parseInt($('input[name="soluong"]').val()) > parseInt($('input[name="soluong"]').attr('max'))) {
            $('input[name="soluong"]').val(parseInt($('input[name="soluong"]').attr('max')));
            $('.message-max').show();
            setTimeout(function() {
                $('.message-max').hide();
            }, 1000);
        } else {
            $('.message-max').hide();
        }

        if (parseInt($('input[name="soluong"]').val()) <= 1) {
            $('input[name="soluong"]').val(1)
        }
    }

    $('.message-max').hide();
    //$('input[name="soluong"]').change(ThongBaoQuaSoLuong);
    $('input[name="soluong"]').on("input", ThongBaoQuaSoLuong)
</script>

<?php include 'inc/footer.php'; ?>