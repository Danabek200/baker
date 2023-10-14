<?php
require 'admin/db.php';

$sql = 'SELECT * FROM body';
$sql = $conn->prepare($sql);
$sql -> execute();
$posts = $sql->fetch();




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Baker Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">kar<span class="logo-dec">su</span></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Bas Bet</a></li>
                  <li class=""><a href="#feature">Mag'liwmatlar</a></li>
                  <li class=""><a href="#portfolio">Jumislar</a></li>
                  <li class=""><a href="#testimonial">Idealar</a></li>
                  <li class=""><a href="#blog">Blog</a></li>
                  <li class=""><a href="#contact">Baylanis Ushin</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title"></h1>
                <h2 class="bnr-sub-title"><?=$posts['title']?></h2>
                <p class="bnr-para"><?=$posts['text']?></p>
                <div class="brn-btn">
                  <a href="single_body.php?id=<?=$posts['id']?>" class="btn btn-more">Tolig'iraq</a>
                </div>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser01.png">
              </div>
              <h3 class="pad-bt15">Creative Concept</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">Amazing Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser03.png">
              </div>
              <h3 class="pad-bt15">Cost effective</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser04.png">
              </div>
              <h3 class="pad-bt15">Secure</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
  
    <!---->
    <!---->
    <!---->
    <!---->
    <?php
          // require 'admin/db.php';
                $sql2 = 'SELECT * FROM portfolio ORDER BY date DESC LIMIT 6';
                $sql2 = $conn->prepare($sql2);
                $sql2 -> execute();
                $posts1 = $sql2->fetchAll();
               
                ?>
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Our Recent Works</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>
          <?php foreach ($posts1 as $row) :?>
          <div class="col-md-4 col-sm-16 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
          
            <figure>
              <img src="admin/portfolio/upload/<?=$row['img']?>" class="img-responsive">
              <figcaption>
                <h2>
                <p><?php $str_len = strlen($row['title']);
                if ($str_len > '27'){
                  $row['title'] = mb_substr($row['title'], 0, 27);
                  $i=strlen(trim($row['title']));
                  $s = false;
            while($s && $i>0) {
                if (mb_substr($row['title'], $i-1, 1)==' ')
                    $s = true;
                $row['title'] = mb_substr($row['title'], 0, -1);
                $i--;
            }
}
          echo $row['title'];
              ?>...</p>
                </h2>
                <p>
                <p><?php $str_len = strlen($row['fakt']);
                if ($str_len > '100'){
                  $row['fakt'] = mb_substr($row['fakt'], 0, 100);
                  $i=strlen(trim($row['fakt']));
                  $s = false;
            while($s && $i>0) {
                if (mb_substr($row['fakt'], $i-1, 1)==' ')
                    $s = true;
                $row['fakt'] = mb_substr($row['fakt'], 0, -1);
                $i--;
            }
}
          echo $row['fakt'];
              ?>...</p>
                </p>
              </figcaption>
            </figure>
          </div>
          <?php endforeach;?>
          
        </div>
        </div>
    </section>
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
          <div class="row">
            <div class="testimonial-item">
              <ul class="bxslider">
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another. </p>
                  </blockquote>
                  <small>Shaun Paul, Client</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>So here is us, on the raggedy edge. Don't push me, and I won't push you. </p>
                  </blockquote>
                  <small>Marry Smith, Client</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another.</p>
                  </blockquote>
                  <small>Vivek Singh, Client</small>
                </li>
                <li>
                  <blockquote>
                    <img src="img/thumb.png" class="img-responsive">
                    <p>So here is us, on the raggedy edge. Don't push me, and I won't push you.</p>
                  </blockquote>
                  <small>John Doe, Client</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Latest from our blog</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line">
          </div>
                <?php
                $sql1 = 'SELECT * FROM blog ORDER BY date DESC LIMIT 3';
                $sql1 = $conn->prepare($sql1);
                $sql1 -> execute();
                $posts1 = $sql1->fetchAll();
                ?>
                <?php foreach ($posts1 as $row) :?>
                  
                
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="single_blog.php?id=<?=$row['id']?>">
               
                  <img src="admin/blog/upload/<?=$row['img']?>" class="img-responsive">
                </a>
              </div>

              <div class="blog-info">
                <h2>
                <p><?php $str_len = strlen($row['title']);
                if ($str_len > '27'){
                  $row['title'] = mb_substr($row['title'], 0, 27);
                  $i=strlen(trim($row['title']));
                  $s = false;
            while($s && $i>0) {
                if (mb_substr($row['title'], $i-1, 1)==' ')
                    $s = true;
                $row['title'] = mb_substr($row['title'], 0, -1);
                $i--;
            }
}
          echo $row['title'];
              ?>...</p>
                </h2>
                
                <p><?php $str_len = strlen($row['text']);
                if ($str_len > '100'){
                  $row['text'] = mb_substr($row['text'], 0, 100);
                  $i=strlen(trim($row['text']));
                  $s = false;
            while($s && $i>0) {
                if (mb_substr($row['text'], $i-1, 1)==' ')
                    $s = true;
                $row['text'] = mb_substr($row['text'], 0, -1);
                $i--;
            }
}
          echo $row['text'];
              ?>...</p>
                <a href="single_blog.php?id=<?=$row['id']?>" class="read-more">Tolig'iraq →</a>
              </div>
            </div>
          </div>
         <?php endforeach;?>
              </div>
            </div>
          
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <?php
    require 'admin/fun.php';
    $about = selectAbout('about');
        ?>
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Bizler menen baylanisiw ushin</h2>
            <p class="sub-title pad-bt15"></p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i><?=$about['address']?></p>
              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i><?=$about['email']?></p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i><?=$about['phone']?></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <!-- <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                </div>
              </form> -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
   
    <!---->
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
