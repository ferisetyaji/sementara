<!DOCTYPE html>
<html lang="en" style="min-height:100%;background-color:#f8f8f8">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplikasi Prediksi Penjualan Furnitur</title>
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/fontawesome/css/all.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/dataTables.min.css')?>">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url('assets/css/admin.css')?>">
    </head>
    <body style="background-color:#f8f8f8">
        <div class="top-bar">
            <div class="container-fluid">
                <a href="#" class="brands">Mebel Sumber Rejeki</a>
                <div class="navbar-right navbar-img" style="margin-right:15px"></div>
            </div>
        </div>
        <div class="admin-menu">
            <ul class="list-unstyled">
                <li id="home">
                    <a href="<?=site_url()?>" class="admin-menu-first" data-id="#home">
                        <i class="fa fa-tachometer-alt fa-fw"></i>
                        <span>Dashbord</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="contents"><?=$content?></div>
        <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/dataTables.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/main.js')?>"></script>
    </body>
</html>