<?php
header("Access-Control-Allow-Origin: *");
    if (isset($_POST["city"])){
    $city=$_POST['city'];
    }
error_reporting(0);
?>
    
    
    
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Puldapii | Waktu Sholat <?php echo $city;?></title>
        <script type="text/javascript">
            var city = "<?php echo $city;?>";
            console.log(city)
        </script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="https://puldapii.or.id/wp-content/uploads/2017/07/favicon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            .home{
                    background: url(mecca.jpg) no-repeat center;
                    background-size:cover;
                }
            .inputin{
                background: none;
                border:none;
                border-bottom: 2px solid white; 
                color: white;
                transition: 0.5s
            }
            #search{
                background: white;
                border:none;
                border-top: 2px solid blue; 
                color: white;
                transition: 0.5s
            }
        </style>
    </head>
    <body data-spy="scroll" data-target="#navmenu">

		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->

        <header id="main_menu" class="header navbar-fixed-top">
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default" id="#navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="/">
                                            <img src="img/Logo-Puldapii-tanpa-arab300.png"/>
                                        </a>
                                    </div>

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="nav-link" href="index.php">Halaman Utama <span class="sr-only">(current)</span></a></li>
                                            <li><a class="nav-link" href="#">Tentang</a></li>
                                            <li><a class="nav-link" href="https://mitchell.cahweb.id/LittleQuran/index.php">Quran</a></li>
                                           
                                            <li><a class="nav-link" href="https://islamdownload.net/125146-download-murottal-quran-30-juz-mp3.html">Murottal</a></li>
                                             <li><a class="nav-link" href="https://islamdownload.net/category/ebook-islami">Ebook</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->

        <section id="home" class="home">
            <div class="home_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="single_slider">
                                    <h3>Prayer Times API</h3>
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <center>
                                            <table class="table">
                                                <tr align="center">
                                                    <td>
                                                    <form method="POST">
                                                       <h3> <div class="form-group">
                                                        <label style="color: white">Your city</label>
                                                        <input type="text" id="kota" class="inputin" name="city" placeholder="<?=$city?>" size="5rem">
                                                        <!-- <button id="btnsrc" type="submit" name="cari" value="cari"><i class="fa fa-search" aria-hidden="true"></i></button> -->
                                                    </div></h3>
                                                    </form>
                                                    </td>
                                                </tr>

                                            
                                            </table>
                                            <div id="City"></div>
                                            
                                        <script src="main.js"></script>
                                        </center>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->

        <section id="clients" class="clients">
            <div class="container" style="padding: 35px;">
                <div class="row">
                    <center>
                        <h3>Visi</h3>
                        <img src="img/Logo-Puldapii-tanpa-arab300.png"/>
                        <p style="width: 60%">Menjadi lembaga yang terbesar di Indonesia, yang bermanhaj Ahlussunnah Wal Jama’ah dalam menjalankan kegiatan di bidang pendidikan, dakwah, sosial, ekonomi dan pemberdayaan ummat.</p>
                    </center>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="main_contact">

                        <div class="contactwithmap_content">

                            <div class="contact_overlay">
                                <div class="col-sm-8 col-xs-12">
                                    <div class="locations_map">
                                        <img src="assets/images/mapbg.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-12">
                                    <div class="contactwithmap_menu">
                                        <h2>Navigasi</h2>
                                         <ul class="footer-menu">
                                            <li><a href="index.php">Halaman Utama <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">Tentang</a></li>
                                            <li><a href="https://mitchell.cahweb.id/LittleQuran/index.php">Quran</a></li>
                                            <li><a href="https://islamdownload.net/category/ebook-islami">Ebook</a></li>
                                            <li><a href="https://islamdownload.net/125146-download-murottal-quran-30-juz-mp3.html">Murottal</a></li>

                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of contact With Map Section -->

        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="main_footer text-center">
                        <p>Made with <i class="fa fa-heart"></i> by <a href="http://github.com/pottsed">Pottsed</a> <?=date("Y")?>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>

        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
