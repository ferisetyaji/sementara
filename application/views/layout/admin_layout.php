<!DOCTYPE html>
<html lang="en" style="min-height:100%;background-color:#fff">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplikasi Prediksi Penjualan Furnitur</title>
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/fontawesome/css/all.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/dataTables.min.css')?>">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url('assets/css/admin.css')?>">
    </head>
    <body style="background-color:#fff">
        <div class="top-bar">
            <a href="#" class="brands">Admin SPK Cafe</a>
            <div class="navbar-right navbar-img" style="margin-right:15px">
                <div class="drop-bar">
                    <div class="i-user"><i class="fas fa-user fa-fw"></i></div>
                </div>
                <ul class="dropmenu">
                    <li><a>Masuk Sebagei Admin</a></li>
                    <li><a href="">Profil</a></li>
                    <li><a href="" class="keluar">Keluar</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="admin-menu">
            <ul class="list-unstyled">
                <li id="home">
                    <a href="<?=site_url('admin')?>" class="admin-menu-first" data-id="#home">
                        <i class="fa fa-tachometer-alt fa-fw"></i>
                        <span>Admin</span>
                    </a>
                </li>
                <li id="barang">
                    <a href="<?=site_url('admin/barang')?>" class="admin-menu-first" data-id="#barang">
                        <i class="fa fa-box fa-fw"></i>
                        <span>Barang</span>
                    </a>
                </li>
                <li id="transaksi">
                    <a href="<?=site_url('admin/transaksi')?>" class="admin-menu-first" data-id="#transaksi">
                        <i class="fa fa-file-alt fa-fw"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <hr>
                <li>
                    <a href="logout" class="admin-logout">
                        <i class="fas fa-sign-out-alt fa-fw"></i>
                        <span>Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="contents"><?=$content?></div>
        <script type="text/javascript" src="<?=base_url('assets/js/jquery.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/dataTables.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/main.js')?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var btn = '<button type="button" class="btn btn-success btn-del btn-add" data-toggle="modal" data-target=".tambah-data">Tambah</button>';
                var alink = '<a href="<?=@$btn_alink?>" class="btn btn-success btn-del">Tambah</a>';
                $('#myTable_wrapper').prepend(<?php if(!empty($btn_add)){if($btn_add == 'btn'){?>btn+<?php }elseif($btn_add == 'alink'){?>alink<?php }}?>);
            });
        </script>
    </body>
</html>