<?php
    require_once('php/connect.php');
    
    $tag = isset($_GET['tag']) ? $_GET['tag']: 'all';
    
    $sql = "SELECT * FROM articles WHERE tag LIKE '%".$tag."%' AND status = true ";
    $result = $conn->query($sql);
    if (!$result) {
        header('Location: blog.php');
    }
    // print_r($result);
?>

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
                        <button class="btn btn-primary <?php echo $tag == 'all' ? 'active': '' ?>">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=html">
                        <button class="btn btn-primary <?php echo $tag == 'html' ? 'active': '' ?>">HTML</button>
                    </a>
                    <a href="blog.php?tag=css">
                        <button class="btn btn-primary <?php echo $tag == 'css' ? 'active': '' ?>">CSS</button>
                    </a>
                    <a href="blog.php?tag=javascript">
                        <button class="btn btn-primary <?php echo $tag == 'javascript' ? 'active': '' ?>">JavaScript</button>
                    </a>
                    <a href="blog.php?tag=php">
                        <button class="btn btn-primary <?php echo $tag == 'php' ? 'active': '' ?>">PHP</button>
                    </a>
                    <a href="blog.php?tag=mysql">
                        <button class="btn btn-primary <?php echo $tag == 'mysql' ? 'active': '' ?>">MySQL</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                if ($result->num_rows){
                while($row = $result->fetch_assoc()) { 
            ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                        <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="Coding1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                        <p class="card-text"><?php echo $row['sub_title'] ?></p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block">Read More</a>
                    </div>
                </div>
            </section>
            <?php 
                    }
                } else {
            ?>
           
            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>
            
            <?php 
                }
            ?>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgU18_tVZdK-nJ0iDuutPnbUsTYwE_XA&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>