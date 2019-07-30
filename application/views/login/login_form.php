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
            <div class="login container">
                <form method="post">
                    <div class="login-title">Login</div>
                    <div class="login-error"><?=$error?></div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-block" name="save" value="1">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="<?=base_url('assets/js/jquery.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/dataTables.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/js/main.js')?>"></script>
    </body>
</html>