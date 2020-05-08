<?php 
session_start();
if(!isset($_SESSION['accessToken']) && !isset($_SESSION['access_token']))
{
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    </head>
    <body>
        <nav>
        </nav>
        <div class="container">
            <div class="row">
                <?php if(isset($_SESSION['accessToken'])){ ?>
                <div class="col-md-4">
                    <img class="img-fluid m-md-auto" src="<?php echo $_SESSION['userData']['picture']['url'];?>">
                </div>
            <div class="col-md-8">
                <table class="table table-hover table-bordered">
                    <tr><th>id</th><td><?php echo $_SESSION['userData']['id'];?></td></tr>
                    <tr><th>first_name</th><td><?php echo $_SESSION['userData']['first_name'];?></td></tr>
                    <tr><th>last_name</th><td><?php echo $_SESSION['userData']['last_name'];?></td></tr>
                    <tr><th>email</th><td><?php echo $_SESSION['userData']['email'];?></td></tr>
                    <tr><td callspan=2><a href="logout.php">Logout</a></td></tr>
                </table>
            </div>
                <?php } ?>
                <?php if(isset($_SESSION['access_token'])){ ?>
                <div class="col-md-4">
                    <img class="img-fluid m-md-auto" src="<?php echo $_SESSION['picture'];?>">
                </div>
            <div class="col-md-8">
                <table class="table table-hover table-bordered">
                    <tr><th>id</th><td><?php echo $_SESSION['id'];?></td></tr>
                    <tr><th>first_name</th><td><?php echo $_SESSION['givenName'];?></td></tr>
                    <tr><th>last_name</th><td><?php echo $_SESSION['familyName'];?></td></tr>
                    <tr><th>email</th><td><?php echo $_SESSION['email'];?></td></tr>
                    <tr><td callspan=2><a href="logout.php">Logout</a></td></tr>
                </table>
            </div>
                <?php } ?>
            </div>
        </div>
        <div class="container-fluid">
          
            <div class="row">
                <div class="col-md-1 d-none d-md-block" style="min-height:100%" title="canvas1"></div>
                <div class="col-md-8" id="products" style="min-height:100%;background-color:#F8FAFB;" title="container">
                    <?php 
                    include "products.php"; 
                    ?>
                </div>
                <div class="col-md-2 d-none d-md-block" style="min-height:100%" title="canvas3"></div>
                <div class="col-md-1 d-none d-md-block" style="min-height:100%" title="canvas4"></div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="assets/vendor/livejs/live.js"></script>
    </body>
</html>