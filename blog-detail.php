<?php
    require_once('php/connect.php');
    
    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' ";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    } else {
        header('location: blog.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['subject'] ?></title>
    <!-- COMMON TAGS -->
    <meta charset="utf-8">
    <!-- Search Engine -->
    <meta property="description" content="<?php echo $row['sub_title'] ?>">
    <meta property="image" content="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
    <meta property="title" content="AppzStory Studio">
    <meta property="keywords" content="html, javascript, js, css, php, mysql">
    <meta property="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="language" content="English">
    <meta property="author" content="HelloWorld">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="AppzStory Studio">
    <meta itemprop="description" content="<?php echo $row['sub_title'] ?>">
    <meta itemprop="image" content="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:title" content="AppzStory Studio">
    <meta property="og:description" content="<?php echo $row['sub_title'] ?>">
    <meta property="og:image" content="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
    <meta property="og:url" content="https://blog-f1b94.web.app/">
    <meta property="og:site_name" content="AppzStory Studio">
    <meta property="og:type" content="website">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta property="msapplication-TileColor" content="#da532c">
    <meta property="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta property="theme-color" content="#ffffff">
    <!-- CSS link -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

    <!-- Section Header -->  
    <header class="jarallax" data-jarallax='{ "speed"; 0.6 }' style="background-image: url(<?php echo $row['image'] ?>);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold"><?php echo $row['subject'] ?></h1>
            <p class="lead"><?php echo $row['sub_title'] ?></p>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12">
                <?php echo $row['detail'] ?>
            </div>
            <div class="col-12">
                <hr>
                <p class="text-right text-muted"><?php echo date_format(new DateTime($row['update_at']),"j F Y") ?></p>
            </div>
            <div class="col-12">
                <div class="fb-comments" data-width="100%" data-href="https://localhost/blog/blog-detail.php?id_helloworld=<?php $row['id']; ?>" data-numposts="5"></div>
                <div id="fb-root"></div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>

    <div class="to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- JS link -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgU18_tVZdK-nJ0iDuutPnbUsTYwE_XA&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:2,
                    },
                    1000:{
                        items:3,
                    }
                }
            });
        });
    </script>
</body>
</html>