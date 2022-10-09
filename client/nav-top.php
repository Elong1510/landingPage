<?php
include('./lib/connect.php');
include('./header.php');
?>
<div class="nav-top">
    <div class="row d-flex align-items-center">
        <div class="col-3">
            <!-- this is the logo -->
            <img src="./img/Asset 21.png" class="img-logo" style="margin-left:30%;" alt="">
        </div>
        <div class="col-7 col-md-5"></div>
        <!-- this is the navigation path -->
        <div class="col-2 col-md-4">
            <div class="nav-bar" style="margin-right:5%;">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-dk d-none d-md-block">
                        Đăng ký ngay
                    </button>
                    <!-- MENU -->
                    <a href="#" id="vie" value="vie" name="vie" type="button" class="btn-nav">Vn</a>
                    <span class="or">|</span>
                    <a href="#" id="eng" value="name" name="eng" type="button" class="btn-nav">En</a>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="p-3 d-flex align-items-center justify-content-between">
                            <span class=""></span>
                            <span class="fw-bold ms-4" id="exampleModalLabel">Đăng ký thành viên</span>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="">
                                <div class="text-start">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Họ và Tên</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Michael Jackson">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0911420619">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="michaeljacksoniswhite@gmail.com">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>