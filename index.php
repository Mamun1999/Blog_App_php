<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9358f2475e.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>

<body>
    
<!-- header -->
<?php
  include(ROOT_PATH .'app/includes/header.php')
?>

    <!-- page wrapper -->

    <div class="page-wrapper">
        <!-- post slider -->

        <div class="post-slider">
            <h1 class="slider-title">
                Trending Post
            </h1>

            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>


            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/LM.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="Messi.html">Messi wil come back in Barcelona</a></h4>
                        <i class="far fa-user">Mamun</i>
                        &nbsp;
                        <i class="far fa-calender">September 2, 2022</i>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/LM.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="Messi.html">Messi wil come back in Barcelona</a></h4>
                        <i class="far fa-user">Mamun</i>
                        &nbsp;
                        <i class="far fa-calender">September 2, 2022</i>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/LM.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="Messi.html">Messi will come back in Barcelona</a></h4>
                        <i class="far fa-user">Mamun</i>
                        &nbsp;
                        <i class="far fa-calender">September 2, 2022</i>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/LM.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="Messi.html">Messi wil come back in Barcelona</a></h4>
                        <i class="far fa-user">Mamun</i>
                        &nbsp;
                        <i class="far fa-calender">September 2, 2022</i>

                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/LM.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="Messi.html">Messi wil come back in Barcelona</a></h4>
                        <i class="far fa-user">Mamun</i>
                        &nbsp;
                        <i class="far fa-calender">September 2, 2022</i>

                    </div>
                </div>
                <!-- <div class="post">2</div>
        <div class="post">3</div>
        <div class="post">4</div>
        <div class="post">5</div> -->

            </div>
        </div>

        <!-- post slider -->
        <!-- content -->

        <div class="content clearfix">
            <!-- Main content -->
            <div class="main-content">
                <h2 class="recent-post-title">Recent Posts</h2>

                <div class="post clearfix">
                    <img src="assets/images/aguero.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Aguero is the highest premier league goal scorer for mManchester city</a></h3>
                        <i class="far fa-user">Aguero</i>
                        &nbsp;
                        <i class="far calender">April 14, 2022</i>
                        <p class="preview-text">
                            Aguero is a Argentine player. He played in Manchester city 1 decades. In 2011,

                        </p>
                        <a href="single.html" class="btn read-more">Read More..</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/aguero.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Aguero is the highest premier league goal scorer for mManchester city</a></h3>
                        <i class="far fa-user">Aguero</i>
                        &nbsp;
                        <i class="far calender">April 14, 2022</i>
                        <p class="preview-text">
                            Aguero is a Argentine player. He played in Manchester city 1 decades. In 2011,

                        </p>
                        <a href="single.html" class="btn read-more">Read More..</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/aguero.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Aguero is the highest premier league goal scorer for mManchester city</a></h3>
                        <i class="far fa-user">Aguero</i>
                        &nbsp;
                        <i class="far calender">April 14, 2022</i>
                        <p class="preview-text">
                            Aguero is a Argentine player. He played in Manchester city 1 decades. In 2011,

                        </p>
                        <a href="single.html" class="btn read-more">Read More..</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/aguero.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h3><a href="single.html">Aguero is the highest premier league goal scorer for mManchester city</a></h3>
                        <i class="far fa-user">Aguero</i>
                        &nbsp;
                        <i class="far calender">April 14, 2022</i>
                        <p class="preview-text">
                            Aguero is a Argentine player. He played in Manchester city 1 decades. In 2011,

                        </p>
                        <a href="single.html" class="btn read-more">Read More..</a>
                    </div>
                </div>
            </div>
            <!-- Main content -->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Premier League</a></li>
                        <li><a href="#">Laliga</a></li>
                        <li><a href="#">BundesLiga</a></li>
                        <li><a href="#">Seria A</a></li>
                        <li><a href="#">Ligue 1</a></li>
                        <li><a href="#">UCL</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- content -->
    </div>

    <!-- page wrapper -->
    <!-- footer -->
    <?php
  include(ROOT_PATH ."/app/includes/footer.php");
?>

    <!-- footer -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Slick carousel -->

</html>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- custom script -->
<script src="assets/js/script.js"></script>
</body>