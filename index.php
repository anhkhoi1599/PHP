<?php include_once 'inc/header.php'; ?>
<?php include_once 'inc/slider.php'; ?>
<?php

?>
<style>
    .mask-icon input.cart {
        background: var(--primary-color);
        position: absolute;
        bottom: 0;
        left: 0px;
        padding: 10px 20px;
        font-weight: 700;
        color: #222;
        transition: all linear 0.2s;
    }
</style>
<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1 data-aos="fade-up" data-aos-easing="linear">Sản phẩm Mới Nhất</h1>
                    <p data-aos="fade-up" data-aos-easing="linear">Sản phẩm mới nhập về của luonvuituoiStore.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $product_new = $product->getproduct_new();
            if ($product_new) {
                while ($new = $product_new->fetch_assoc()) {
            ?>
                    <div class="col-md-6 col-lg-4 col-xl-4" data-aos="zoom-in-up" data-aos-delay="500" data-aos-easing="linear">
                        <div class="blog-box full-radius shadow flex-column">
                            <div class="box-img none-radius">
                                <a href="details.php?MaSanPham=<?php echo $new['MaSanPham']; ?>">
                                    <div class="type-lb show">
                                        <p class="new bottom-left-radius">Mới nhất</p>
                                    </div>
                                    <div class="img-fit product-mobile" style="background-image: url('./admin/<?php echo $new['HinhChinh'] ?>'),url('./admin/images/default.png');">
                                    </div>
                                </a>

                            </div>
                            <div class="blog-content flex-grow-1 flex-shrink-1">
                                <div class="title-blog view-row-content ">
                                    <h4><?php echo $new['TenSanPham']; ?></h4>
                                    <p class="new-product-descrip" style="color: black;">
                                        <?php echo $new['MoTa']; ?>
                                    </p>
                                </div>
                                <ul class="option-blog">
                                    <li style="display: block;"><a style="width: 100%;" href="details.php?MaSanPham=<?php echo $new['MaSanPham']; ?>"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- End Blog  -->



<?php include 'inc/footer.php'; ?>