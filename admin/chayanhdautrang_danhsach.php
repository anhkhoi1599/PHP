<?php include 'inc/header.php'; ?>
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">
            


            <!-- Main Content -->
            <div id="content">
            
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
            
                    <!-- Topbar Search -->
                    
            
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
            
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                               placeholder="Search for..." aria-label="Search"
                                               aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
            
            
            
                        <!-- Nav Item - User Information -->
                        <!--<li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                     src="img/undraw_profile.svg">
                            </a>-->
                        <!-- Dropdown - User Information -->
                        <!--</li>-->
            
                    </ul>
            
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
            
                    <!-- Page Heading -->
                    <h1 class=" mb-2 text-capitalize table-admin__title">Chạy ảnh đầu trang</h1>
                    <div>
                        <a href="/admin/chay-anh-dau-trang/them" class="text-capitalize add-item-admin__btn">
                            <span class="icon white">
                                <ion-icon size="large" name="add-circle"></ion-icon>
                            </span>
                            <span class="add-item">Thêm</span>
                        </a>
                    </div>
            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
            
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize">
                                                Hình chạy đầu trang
                                            </th>
                                            <th class="text-capitalize">
                                                Mô tả hình
                                            </th>
                                            <th colspan="2" class="text-capitalize text-center"> Tùy chọn</th>
                                        </tr>
                                    </thead>
            
                                    <tbody>
                                            <tr>
                                                <td class="text-center">
                                                    <img class="slider-admin__img" src="https://i.pinimg.com/originals/29/20/e8/2920e82280bc36edb564434820f2b788.jpg" />
                                                </td>
                                                <td>
                                                    Chất lượng h&#224;ng đầu
                                                </td>
                                                <td class="options">
                                                    <a href="/admin/chay-anh-dau-trang/chinh-sua?id=2">
                                                        <span class="icon yellow-bt hover">
                                                            <ion-icon name="create" size="large"></ion-icon>
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="options">
                                                    <a href="/admin/chay-anh-dau-trang/xoa?id=2">
                                                        <span class="icon red-bt hover">
                                                            <ion-icon name="trash" size="large"></ion-icon>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">
                                                    <img class="slider-admin__img" src="https://img.websosanh.vn/v2/users/root_product/images/banh-quy-bo-ot-royal-danish-/wncc837j4emn1.jpg?compress=85" />
                                                </td>
                                                <td>
                                                    Sản phẩm tốt nhất
                                                </td>
                                                <td class="options">
                                                    <a href="/admin/chay-anh-dau-trang/chinh-sua?id=1">
                                                        <span class="icon yellow-bt hover">
                                                            <ion-icon name="create" size="large"></ion-icon>
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="options">
                                                    <a href="/admin/chay-anh-dau-trang/xoa?id=1">
                                                        <span class="icon red-bt hover">
                                                            <ion-icon name="trash" size="large"></ion-icon>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
            
            
            
                                    </tbody>
                                </table>
                                <br />
                                
                            </div>
                        </div>
                    </div>
            
                </div>