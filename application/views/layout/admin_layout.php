<!DOCTYPE html>
<html lang="en" style="min-height:100%;background-color:#f8f8f8">
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
    <body style="background-color:#f8f8f8">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <a href="#" class="brands">Mebel Sumber Rejeki</a>
                    <div class="navbar-right navbar-img" style="margin-right:15px"></div>
                </div>
            </div>
        </div>
        <div class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 sidebar">
                        <nav class="side-nav">
                            <ul class="list-unstyled">
                                <li><a href="<?=site_url('admin')?>"><span><i class="fas fa-users-cog"></i></span>Admin</a></li>
                                <li><a href="<?=site_url('admin/barang')?>"><span><i class="fas fa-box"></i></span>Barang</a></li>
                                <li><a href="<?=site_url('admin/transaksi')?>"><span><i class="fas fa-file"></i></span>Transaksi</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9 content"><?=$content?></div>
                </div>
            </div>
        </div>
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