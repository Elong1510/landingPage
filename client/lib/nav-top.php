<?php
include('./connect.php');
include('./header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="nav-top">
            <!-- this is the logo -->
            <div class="col-4">
                <img src="../img/test-logo.jpg" class="img-logo w-100" style="height:100px; width:200px" alt="">
            </div>
            <div class="col-6"></div>
            <!-- this is the navigation path -->
            <div class="col-2">
                <div class="nav-bar">
                    <!-- MENU -->
                    <a href="./?view" id="eng" value="name" name="eng" type="button" class="btn-nav">Eng</a>
                    <a href="./?view" id="vie" value="vie" name="vie" type="button" class="btn-nav">Vie</a>
                </div>
            </div>
        </div>
    </div>
</div>