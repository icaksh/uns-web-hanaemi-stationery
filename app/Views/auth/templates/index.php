<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Authentication - Hanaemi Stationery</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?=base_url();?>/img/hanaemi/img-login.svg">
    <link rel="stylesheet" href="<?=base_url();?>/css/hanaemi-auth.css">
</head>

<body id="panel">
    <div id="auth-sidebar">
        <!-- <div class="logo d-none d-md-block mx-md-auto"><img src="img/Logo.png" alt="Logo" width="100"></div> -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-sm-7 col-md-10 col-md-9">
                    <h4 class="text-white text-center mb-0 mb-md-4">Hanaemi</h4>
                </div>
                <div class="d-none d-md-block col-4 col-md-10 col-md-9">
                    <p class="text-white text-center">Sistem Aplikasi Hanaemi Stationery</p>
                </div>
            </div>
        </div>
        <div class="copyright d-none d-md-block">Copyright © <span class="year">2021</span> Hanaemi Stationery</div>
    </div>
    <?= $this->renderSection('content');?>
    <!-- JQuery 3.4.1 js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Main js -->
    <script src="<?=base_url();?>/js/hanaemi-auth.js"></script>

</body>
</html>

<?php /*<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hanaemi - Auth</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url();?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <?= $this->renderSection('content');?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>/js/sb-admin-2.min.js"></script>

</body>

</html>-->*/