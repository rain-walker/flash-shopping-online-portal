<?php 
require_once "f-config.php";
$redirectURL="https://".$_SERVER['HTTP_HOST']."/f-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
//echo $loginURL;
if(isset($_SESSION['accessToken']) || isset($_SESSION['access_token']))
{
    header('Location: index.php');
}
require_once "g-config.php";
    //$gclient->setApprovalPrompt('consent');
$auth_url = $gclient->createAuthUrl();
//header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wish - Shopping made fun</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
    
    
  <!-- Favicons -->
  <link href="assets/img/favicon.svg" rel="icon" type="image/svg+xml">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap-social.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <!--<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
  <link href="assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Wish - Flash Shopping - v2.0.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: Aniket Teltumbade
  * License: https://technoin.co.in/
  ======================================================== -->
    <style type="text/css">
        @font-face {
            font-family: "Proxima Nova";
            src: url("assets/fonts/proximanova-regular-webfont.woff");
          }
        
        html, body{
            width:100%;
            height: 100% !important;
            bottom:0;
            top:0;
            overflow-y: hidden;
            font-family: 'Proxima Nova', sans-serif;
        }
        .nav-tabs .nav-link.active {
            background-color: transparent;
            border-bottom:2px solid rgb(47, 183, 236);
            border-right: none;
            border-left: none;
            border-top: none;
            font-weight: 700;
            font-size: 18px;
        }
        .scroll1 img, .scroll2 img, .scroll3 img, .scroll4 img{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        input[type=email], input[type=password], input[type=text]{
            border: none;
            background-color:rgb(240,245,247);
            color: rgb(126, 154, 166);
        }
        input[type=text]{
            width: calc( 50% - 5px );
            position: relative;
            float: left;
            margin-bottom: 10px;
        }
        input[type=text]:nth-child(odd){
            margin-right: 5px;
        }
        input[type=text]:nth-child(even){
            margin-left: 5px;
        }
        .btn.btn-custom{
            width:100%;
            background: rgb(47,183,236);
            color: white;
            font-weight: 700;
        }
        svg{
            margin-bottom: 20px;
        }
        .login{
            max-width:360px;
        }
        .text-divider{
            margin: 1em 0; 
            line-height: 0; 
            text-align: center;
        }
        .text-divider span{
            padding-left: 1em; 
            padding-right: 1em; 
            background: white;
        }
        .text-divider:before{ 
            content: " "; display: block; 
            border-top: 1px solid #e3e3e3; 
            border-bottom: 1px solid #f7f7f7;
        }
    </style>
  
</head>


    <body>
      
        <div class="container-fluid h-100">
            <div class="row no-gutters h-100">
                <div class="col-md-2 d-none d-md-block">
                    <div class="w-100 scroll1">
                        <img class="img-fluid" src="resources/img/540691417a9eb4663a3c6f25-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5a45afdb2053d022525a5e0e-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5a4dcbc27972f96ed55c7cfc-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5aec5ada73ea9e77971b6fa9-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5af516070fa44114d0570f31-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5b8cf41374728216e254d1fc-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5bcab581d36e741ae013154d-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5c17e1b4827567223178a8ec-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5c359f1ed947a6306cefb99c-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5cf638b2ec92ce3f641a86d5-0-feed.jpg">
                    </div>
                </div>
                <div class="col-md-2 d-none d-md-block">
                    <div class="w-100 scroll2">
                        <img class="img-fluid" src="resources/img/5d157304032afc63aec91a84-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5d1ece978d2d154a685eff9d-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5d71b312ce269874dcf72839-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5d7a1f1085a68b1d4aa70158-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5d807312c73dd3170a6ef136-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5d8d93b36bada57ed25d3810-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5dad1ec3824151271b0ae994-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5dcf927d0d0a7b0bdd6c11af-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5dd147cdfaf4363862dc6b04-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5def13c2fa3f160750048cde-0-feed.jpg">
                    </div>
                </div>
                <div class="col-md-2 d-none d-md-block">
                    <div class="w-100 scroll3">
                        <img class="img-fluid" src="resources/img/5df84258e068f7032659981a-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e030624dbb45502e388c719-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e05a29aee041300951e5cc5-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e0effe89123590bdadd64ba-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e3f926171074623014c6005-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e421d4d6ce4601f2a7ca73b-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e4b92ac96159b04c051d6a9-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e5b5c4ce4233cb6b10f0b69-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e607dec5238daab4f807cfd-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e623d87fef21835844a12cb-0-feed.jpg">
                    </div>
                </div>
                <div class="col-md-2 d-none d-md-block">
                    <div class="w-100 scroll4">
                        <img class="img-fluid" src="resources/img/5e6303462646291048cd5c99-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e630882eab4db1300ac9085-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e71dd361bcf385654e84750-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e7310d68095480300bc118e-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e7872e78745ee02c3048c53-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e7c2880b652af24cba4fcea-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e81b7eace005cd0c0f9aeee-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e86dd56defaef4cf061a54b-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e912f2b4f228226c1d3ea60-0-feed.jpg">
                        <img class="img-fluid" src="resources/img/5e7872e78745ee02c3048c53-0-feed.jpg">
                    </div>
                </div>
                <div class="col-md-4 text-center h-100 d-table login mx-auto">
                    <div class=" h-auto align-middle d-table-cell">
                    <svg width="85" height="30" viewBox="0 0 143 48" xmlns="http://www.w3.org/2000/svg"><g fill="#2fb7ec" fill-rule="evenodd"><path d="M71.04 10.045c-.867-1.022-1.192-2.273-.974-3.757.217-1.48.91-2.734 2.076-3.755C73.309 1.51 74.629 1 76.105 1c1.475 0 2.647.511 3.513 1.533.868 1.02 1.192 2.274.975 3.755-.218 1.484-.91 2.735-2.076 3.757-1.168 1.02-2.49 1.532-3.964 1.532-1.476 0-2.647-.511-3.514-1.532M59.272 15.146c-1.732 0-3.343 1.411-3.582 3.134l-1.76 12.833c-.194 1.398-.864 2.61-2.008 3.638-1.145 1.028-2.435 1.542-3.865 1.542-1.392 0-2.52-.503-3.381-1.511-.864-1.007-1.195-2.23-.997-3.669l1.062-7.788c.032-1.554-1.134-2.77-2.742-2.77h-4.21c-1.608 0-3.112 1.216-3.508 2.77l-1.097 7.788c-.198 1.44-.87 2.662-2.012 3.669-1.142 1.008-2.409 1.511-3.799 1.511-1.392 0-2.528-.514-3.408-1.542-.881-1.027-1.224-2.24-1.031-3.638l2.358-17.028c.25-1.658-.732-3.39-2.23-4.093 0 0-17.758-7.402-18.915-7.878-1.172-.48-2.5.596-2.954 2.39L.108 8.787c-.455 1.794.57 3.834 2.275 4.533l11.901 4.926-1.783 12.867c-.598 4.315.413 8.007 3.038 11.069 2.624 3.064 6.084 4.594 10.382 4.594 3.967 0 7.59-1.335 10.865-4.008 2.616 2.673 5.89 4.008 9.818 4.008 4.297 0 8.181-1.53 11.654-4.594 3.472-3.062 5.508-6.754 6.106-11.069 0 0 1.865-13.579 1.899-13.816.162-1.184-1.12-2.15-2.851-2.15h-4.14zM76.717 15h-3.72c-1.557 0-3.005 1.267-3.22 2.815 0 0-3.747 26.755-3.764 26.886-.147 1.063 1.005 1.933 2.561 1.933h3.72c1.556 0 3.004-1.267 3.218-2.815l3.765-26.886C79.424 15.87 78.272 15 76.717 15M140.49 18.517c-2.133-2.517-5.02-3.776-8.663-3.776-3.644 0-7.046.798-10.4 3.693l2.375-16.463C123.952.887 122.776 0 121.19 0h-3.795c-1.589 0-3.067 1.292-3.284 2.873l-6.097 41.94c-.15 1.083 1.025 1.971 2.613 1.971h3.795c1.559 0 3.008-1.246 3.268-2.787h.005l1.91-13.08c.386-2.643 1.4-4.647 3.044-6.01 1.643-1.364 3.436-2.046 5.375-2.046 3.92 0 5.503 2.602 4.744 7.804l-2.035 14.108c-.15 1.084 1.026 1.971 2.614 1.971h3.793c1.59 0 3.066-1.292 3.286-2.873l2.345-15.283c.612-4.196-.148-7.554-2.28-10.071M105.235 23.153l1.775-2.266c.752-.96.77-2.437.045-3.447-.318-.547-1.242-1.078-2.086-1.534l-.095-.052c-2.67-1.448-5.294-1.994-8.772-1.824-3.778.185-7.002 1.3-9.581 3.315-2.6 2.03-4.07 4.601-4.366 7.64-.301 3.084.74 5.386 3.091 6.843 1.117.706 2.138 1.244 3.034 1.6.89.357 2.2.775 3.895 1.245 1.646.459 2.9.98 3.724 1.543.756.52 1.094 1.077 1.032 1.703-.063.654-.401 1.183-1.031 1.616-.655.45-1.53.706-2.598.758-2.888.141-5.605-.533-8.075-2.004l-1.833-1.015a1.853 1.853 0 0 0-.99-.224 1.938 1.938 0 0 0-1.444.742l-2.636 3.494c-.27.358-.376.787-.3 1.207.073.408.308.76.664.998.863.68 1.76 1.273 2.668 1.764a19.146 19.146 0 0 0 3.8 1.579c2.49.736 4.961 1.05 7.34.934 3.586-.176 6.684-1.306 9.21-3.36 2.543-2.067 3.99-4.755 4.307-7.989.321-3.282-.62-5.61-2.798-6.922-1.116-.662-2.102-1.152-2.932-1.456-.825-.3-2.22-.724-4.147-1.258-1.904-.526-3.27-1.008-4.063-1.43-.698-.372-.992-.87-.924-1.567.127-1.307 1.47-2.032 3.988-2.154 2.025-.1 4.057.368 6.029 1.383.405.223.852.49 1.26.752.507.283.897.396 1.269.377.548-.026 1.023-.331 1.54-.99z"></path></g></svg>
                        <nav class="nav-justified ">
                            <div class="nav nav-tabs px-0" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Log in</a>
                                <a class="nav-item nav-link " id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Sign Up</a>
                            </div>
                        </nav>
                        <div class="tab-content px-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                                <form class="px-1 py-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control py-3" id="exampleDropdownFormEmail1" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control py-3" id="exampleDropdownFormPassword1" placeholder="Password">
                                    </div>    
                                    <div class="text-right" style="font-size:14px;color:rgb(126, 154, 166);font-weight:400;">Forgot Password</div>
                                    <button type="submit" class="btn btn-custom">Log In</button>
                                    <div class="text-divider"><span>or</span></div>
                                    
                                    <!-- Facebook Button -->
                                    <a class="btn btn-social btn-facebook" style="width: 100%;margin:5px 0;padding:5px;text-align:center;color:white;" onclick="window.onclick=newpop('<?php echo $loginURL; ?>')"><span class="fab fa-facebook"></span>Facebook</a>
                                    <a class="btn btn-social btn-Google" style="width: 100%;margin:5px 0;padding:5px;text-align:center;color:red;"  onclick="window.onclick=newpop('<?php echo $auth_url; ?>')"><span class="fab fa-google"></span>Google</a>
                                </form>
                            </div> 
                            <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                                <form class="px-1 py-3">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control py-3" id="exampleDropdownFormEmail1" placeholder="First Name">
                                        <input type="text" name="last_name" class="form-control py-3" id="exampleDropdownFormEmail1" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control py-3" id="exampleDropdownFormEmail1" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control py-3" id="exampleDropdownFormPassword1" placeholder="Password">
                                    </div>    
                                    <button type="submit" class="btn btn-custom">Sign Up</button>
                                    <div class="text-divider"><span>or</span></div>
                                    
                                    <!-- Facebook Button -->
                                    <a class="btn btn-social btn-facebook" style="width: 100%;margin:5px 0;padding:5px;text-align:center;color:white;" onclick="window.onclick=newpop('<?php echo $loginURL; ?>')"><span class="fab fa-facebook"></span>Facebook</a>
                                    <a class="btn btn-social btn-Google" style="width: 100%;margin:5px 0;padding:5px;text-align:center;color:red;"  onclick="window.onclick=newpop('<?php echo $auth_url; ?>')"><span class="fab fa-google"></span>Google</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <!--bootstrap-->
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
        <!-- live update-->
        <script src="assets/vendor/livejs/live.js"></script>
        <!-- Scrolling -->
        <script src="assets/js/Infinite-Scroller-Plugin-jQuery/infiniteslidev2.min.js"></script>
        <script src="assets/js/Infinite-Scroller-Plugin-jQuery/infiniteslidev2.js"></script>
        <script>
            $(document).ready(function(){
                $('.scroll1').infiniteslide({
                    speed: 100,
                    direction: 'up',
                    pauseonhover: false
                });
                $('.scroll2').infiniteslide({
                    speed: 75,
                    direction: 'down',
                    pauseonhover: false
                });
                $('.scroll3').infiniteslide({
                    speed: 75,
                    direction: 'up',
                    pauseonhover: false
                });
                $('.scroll4').infiniteslide({
                    speed: 100,
                    direction: 'down',
                    pauseonhover: false
                });
            });     
        </script>
        
        <script>
        function newpop(url){
            
            window.open(url);
            window.close('_child');
        }
        </script>
    </body>
</html>