<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php") ?>
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

<footer class="semi-footer mt-5 p-5 text-center text-md-left">
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
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'about' ? 'active': '' ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail.php' ? 'active': '' ?>">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
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
