<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="64x64" href="images/favicon.png">
    <title>BPM Club Sono TMSP</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index-landingpage/landing-page.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Animate on Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="">

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php include("components/header.php"); ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Static Slider 10  -->
                <!-- ============================================================== -->
                <div class="static-slider-head" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/platines.jpg'); background-size: cover;">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row justify-content-center">
                            <!-- Column -->
                            <div class="col-lg-8 col-md-6 align-self-center text-center" data-aos="fade-up" data-aos-duration="1200">
                                <h1 class="title">Notre Équipe</h1>
                                <h4 class="subtitle font-light">Voici les membres de notre équipe</h4>
                                <a href="#learn-more" class="btn btn-outline-light m-r-20 btn-md m-t-30 font-14">En savoir plus</a>
                                <a href="/#contact" class="btn btn-md m-t-30 btn-danger-gradiant font-14">Nous contacter</a>
                            </div>
                            <!-- Column -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End text  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Portfolio 1  -->
                <!-- ============================================================== -->
                <div class="spacer" style="padding-top: 0px;">
                    <div class="container">
                        <!-- Row  -->
                        <div class="row m-t-40">
                            <!-- Column -->
                            <div class="col-md-4">
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                    <a  class="img-ho" style="cursor: default"><img class="card-img-top img-ho" src="images/team/avatar.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Maxence Durieu</h5>
                                        <p class="m-b-0 font-14">Président</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                            </div>
                            <!-- Column -->
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-up" data-aos-duration="1200">
                                    <a  class="img-ho" style="cursor: default"><img class="card-img-top" src="images/team/avatar.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Jacques</h5>
                                        <p class="m-b-0 font-14">VP</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-4">
                                <div class="card card-shadow" data-aos="flip-right" data-aos-duration="1200">
                                   <a  class="img-ho" style="cursor: default"><img class="card-img-top" src="images/team/avatar.jpg" alt="wrappixel kit" /></a>
                                    <div class="card-body">
                                        <h5 class="font-medium m-b-0">Loic Bigeard</h5>
                                        <p class="m-b-0 font-14">VP</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Back to top -->
            <!-- ============================================================== -->
            <a class="bt-top btn btn-circle btn-lg btn-info" href="#top"><i class="ti-arrow-up"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <?php include("components/footer.php"); ?>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <?php include("components/scripts.php"); ?>
</body>

</html>
