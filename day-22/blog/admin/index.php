<?php
require_once '../vendor/autoload.php';
//use App\classes\Login;
$login = new App\classes\Login;
$message=' ';
if (isset($_POST['btn'])){
    $message = $login->adminLoginCheck($_POST);
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Site</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/heroic-features.css" rel="stylesheet">
</head>
<body>

<div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2>Admin Panel</h2>
                </div>

                <div class="card-body">
                    <h3><?php echo $message; ?></h3>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>

</body>
</html>