<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <!-- COMMON TAGS -->
    <meta charset="utf-8">
    <!-- Search Engine -->
    <meta name="description" content="คาดหวังไว้ว่า จะสอนนักเรียนทุกคน ให้สามารถสร้างเว็บไซต์ขึ้นมาด้วยตัวเอง และเรียนรู้องค์ประกอบ ทุกอย่างที่จำเป็นต่อการเริ่มสร้างเว็บไซต์ขึ้นมา เพื่อให้สามารถประกอบอาชีพ, เข้าสมัครงาน, ทำโปรเจคจบ, หรือทำโปรเจคที่ตัวเองคาดหวังไว้ ให้สำเร็จ">
    <meta name="image" content="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
    <meta name="title" content="AppzStory Studio">
    <meta name="keywords" content="html, javascript, js, css, php, mysql">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="HelloWorld">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="AppzStory Studio">
    <meta itemprop="description" content="คาดหวังไว้ว่า จะสอนนักเรียนทุกคน ให้สามารถสร้างเว็บไซต์ขึ้นมาด้วยตัวเอง และเรียนรู้องค์ประกอบ ทุกอย่างที่จำเป็นต่อการเริ่มสร้างเว็บไซต์ขึ้นมา เพื่อให้สามารถประกอบอาชีพ, เข้าสมัครงาน, ทำโปรเจคจบ, หรือทำโปรเจคที่ตัวเองคาดหวังไว้ ให้สำเร็จ">
    <meta itemprop="image" content="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="AppzStory Studio">
    <meta name="og:description" content="คาดหวังไว้ว่า จะสอนนักเรียนทุกคน ให้สามารถสร้างเว็บไซต์ขึ้นมาด้วยตัวเอง และเรียนรู้องค์ประกอบ ทุกอย่างที่จำเป็นต่อการเริ่มสร้างเว็บไซต์ขึ้นมา เพื่อให้สามารถประกอบอาชีพ, เข้าสมัครงาน, ทำโปรเจคจบ, หรือทำโปรเจคที่ตัวเองคาดหวังไว้ ให้สำเร็จ">
    <meta name="og:image" content="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
    <meta name="og:url" content="https://blog-f1b94.web.app/">
    <meta name="og:site_name" content="AppzStory Studio">
    <meta name="og:type" content="website">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS link -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section Header -->  
    <header class="jarallax" data-jarallax='{ "speed"; 0.6 }' style="background-image: url('https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">บทความ</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique suscipit cumque voluptate distinctio fugiat, non libero! Totam, laudantium quo. Eligendi pariatur saepe eos nisi minima illum reiciendis beatae incidunt dolorem!</p>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                        <button class="btn btn-primary">ทั้งหมด</button>
                    </a>
                    <button class="btn btn-primary">HTML</button>
                    <button class="btn btn-primary">CSS</button>
                    <button class="btn btn-primary">JavaScript</button>
                    <button class="btn btn-primary">PHP</button>
                    <button class="btn btn-primary">MySQL</button>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=001" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/blog/img1.jpg" alt="Coding1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">LOREM IPSUM</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, voluptas suscipit. Fuga corporis ab harum accusantium reiciendis quo optio, saepe eius ea quae explicabo? Eum aliquam ex asperiores alias iusto. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=001" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/blog/img2.jpg" alt="Coding2">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/blog/img3.jpg" alt="Coding3">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/blog/img4.jpg" alt="Cdoing4">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/blog/img5.jpg" alt="Coding5">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="#" class="warpper-card-img">
                        <img class="card-img-top" src="assets/images/blog/img6.jpg" alt="Cdoing6">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                        <a href="#" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>

        </div>

    </section>

    <!-- Section About -->
    <section class="position-relative py-5 jarallax" data-jarallax='{ "speed"; 0.6 }' style="background-image: url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/images/logo.png" class="img-fluid" width="150" alt="Logo">
                    <h2 class="display-4 font-weight-bold text-white">AppzStory Studio</h2>
                    <div class="star-rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <div class="star-current" style="width: 81%;">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
            <div class="col-md-4">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" width="35" height="35" class="d-inline-block align-top" alt="">
                    AppzStory Studio
                </a>
                <p>
                    <i class="fa fa-phone-square"></i> : 099-999-9999 <br>
                    <i class="fa fa-envelope"></i> : email@example.com <br>
                    <i class="fa fa-address-card"></i> : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed nihil et soluta est dolorem.
                </p>
                <a href="https://www.facebook.com/WebAppzStory" target="_blank">
                    <i class="fa fa-facebook-square fa-2x"></i>
                </a>
                <a href="https://www.youtube.com/appzstorystudio" target="_blank">
                    <i class="fa fa-youtube fa-2x"></i>
                </a>  
            </div>
            <div class="col-md-3">
                <h4>Menu</h4>
                <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
            </div>
            <div class="col-md-5">
                <h4>Map</h4>
                <div id="map"></div>
            </div>
        </div>
    </footer>
    
    <footer class="footer">
        <span>
            COPYRIGHT © 2019 
            <a href="https://www.facebook.com/WebAppzStory" target="_blank">
                AppzStory Studio
            </a>
        </span>
        All Right Reserved
    </footer>

    <div class="to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- JS link -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgU18_tVZdK-nJ0iDuutPnbUsTYwE_XA&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>