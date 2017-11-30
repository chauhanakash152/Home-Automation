
<!DOCTYPE HTML>
<html>
<head>
<title>Studio</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/boot.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style_common.css">
<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
<script src="assets/js/modernizr.custom.69142.js"></script>
<script src="assets/js/jquery-1.10.1.min.js"></script>
<script src="assets/js/bootstrap.min.js" ></script>
</head>
<body>
<div id="page-top" class="index">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand page-scroll" href="#page-top">Home-Automation</a></div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="page-scroll" href="#page-top">Home</a></li>
          <li><a class="page-scroll" href="#services">Services</a></li>
          <li><a class="page-scroll" href="#port">Control System</a></li>
          <li><a class="page-scroll" href="#about">About</a></li>
          <li><a class="page-scroll" href="#team">Team</a></li>
          <li><a class="page-scroll" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <!-- Header -->
  <header style="background-image:url(assets/img/3218_Computer-power-abstract-binary-code.jpg)">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Home-Automation</div>
        <div class="intro-heading"> On Your Finger Tips</div>
        <a href="#services" class="page-scroll btn btn-primary">Tell Me More</a></div>
    </div>
  </header>
</div>
<!-- ===== services ===== -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">Services</h2>
        <h3 class="section-subheading text-muted">Control every household device on your finger</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-thermometer-empty fa-stack-1x fa-inverse"></i></span>
        <h4 class="service-heading">Temperature</h4>
        <p class="text-muted">Keep a track on the temperature of the room and ON/OFF the A.C on your fingertips.</p>
      </div>
      <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i></span>
        <h4 class="service-heading">Tubelight</h4>
        <p class="text-muted">ON/OFF the tubelight from your fingertips from anywhere/everywhere.</p>
      </div>
      <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-bolt fa-stack-1x fa-inverse"></i></span>
        <h4 class="service-heading">Save Electricity</h4>
        <p class="text-muted">Save Electricity by switching off the appliances when they are not in need from here.</p>
      </div>
    </div>
  </div>
</section>
<!-- ===== Team Section ===== -->
<section id="port" class="bg-danger">
  <center> <h1 style="padding-top:0px;">Control System</h1></center>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3" style="background-color:white;">
        <center><p>First bulb</p></center>
        <?php
          $varStr=file_get_contents("bulb_1_status.txt");
          if($varStr=="ON"){
            echo '<img id="myImage1"  src="pic_bulbon.gif" width="300" height="300" style="padding-left=100px;">';
          }else{
            echo '<img id="myImage1"  src="pic_bulboff.gif" width="300" height="300" style="padding-left=100px;">';
          }
         ?>
        <!--form action="" method="post"-->
          <center><p><input type="submit" value="On" name="bulb1on" onclick="changeImage1a()" > &nbsp;
            <input type="submit" name="bulb1off" value="off" onclick="changeImage1b()"></p></center>
          <script>
            function changeImage1b(){
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"OFF",bulb1off:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage1');
                    image.src = "pic_bulboff.gif";
                  }

              });
            }
            function changeImage1a() {
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"ON",bulb1on:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage1');
                    image.src = "pic_bulbon.gif";
                  }

              });

          }
        </script>

      </div>
      <div class="col-sm-3" style="background-color:white;">
        <center><p>Second bulb</p></center>
        <?php
          $varStr=file_get_contents("bulb_2_status.txt");
          if($varStr=="ON"){
            echo '<img id="myImage2"  src="pic_bulbon.gif" width="300" height="300" style="padding-left=100px;">';
          }else{
            echo '<img id="myImage2"  src="pic_bulboff.gif" width="300" height="300" style="padding-left=100px;">';
          }
         ?>
        <!--form action="" method="post"-->
          <center><p><input type="submit" value="On" name="bulb2on" onclick="changeImage2a()" > &nbsp;
            <input type="submit" name="bulb2off" value="off" onclick="changeImage2b()"></p></center>
          <script>
            function changeImage2b(){
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"OFF",bulb2off:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage2');
                    image.src = "pic_bulboff.gif";
                  }

              });
            }
            function changeImage2a() {
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"ON",bulb2on:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage2');
                    image.src = "pic_bulbon.gif";
                  }

              });

          }
        </script>

      </div>
      <div class="col-sm-3" style="background-color:white;">
        <center><p>Third bulb</p></center>
        <?php
          $varStr=file_get_contents("bulb_3_status.txt");
          if($varStr=="ON"){
            echo '<img id="myImage3"  src="pic_bulbon.gif" width="300" height="300" style="padding-left=100px;">';
          }else{
            echo '<img id="myImage3"  src="pic_bulboff.gif" width="300" height="300" style="padding-left=100px;">';
          }
         ?>
        <!--form action="" method="post"-->
          <center><p><input type="submit" value="On" name="bulb3on" onclick="changeImage3a()" > &nbsp;
            <input type="submit" name="bulb3off" value="off" onclick="changeImage3b()"></p></center>
          <script>
            function changeImage3b(){
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"OFF",bulb3off:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage3');
                    image.src = "pic_bulboff.gif";
                  }

              });
            }
            function changeImage3a() {
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"ON",bulb3on:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage3');
                    image.src = "pic_bulbon.gif";
                  }

              });

          }
        </script>

      </div>
      <div class="col-sm-3" style="background-color:white;">
        <center><p>Fan</p></center>
        <?php
          $varStr=file_get_contents("fan_status.txt");
          if($varStr=="ON"){
            echo '<img id="myImage4"  src="pic_fanon.gif" width="300" height="300" style="padding-left=100px;">';
          }else{
            echo '<img id="myImage4"  src="pic_fanoff.jpg" width="300" height="300" style="padding-left=100px;">';
          }
         ?>
        <!--form action="" method="post"-->
          <center><p><input type="submit" value="On" name="fanon" onclick="fana()" > &nbsp;
            <input type="submit" name="fanoff" value="off" onclick="fanb()"></p></center>
          <script>
            function fanb(){
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"OFF",fanoff:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage4');
                    image.src = "pic_fanoff.jpg";
                  }

              });
            }
            function fana() {
              $.ajax({
                  method:"POST",
                  url:"bulbonoff.php",
                  data:{status:"ON",fanon:"true"},
                  success:function(data){
                    console.log(data);
                    var image = document.getElementById('myImage4');
                    image.src = "pic_fanon.gif";
                  }

              });

          }
        </script>

      </div>
    </div>
    <!-- <div class="row">
      <div class="col-sm-3" style="background-color:red;">
        asdasdada
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3" style="background-color:black;">
        asdasd
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3" style="background-color:white;">
        asdasd
      </div>
    </div> -->
  </div>
</section>

<!-- About Section -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">About</h2>
        <h3 class="section-subheading text-muted">We are the young aspiring minds starving for knowledge</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image"><img class="img-circle img-responsive" src="207040-child.jpg" alt="" style="height:155px;"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 style="color:#3680C1">2017-2018</h4>
                <h4 class="subheading" style="color:#3680C1">Under guidance of: Mrs. Navjot Rathour </h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">She had guided us on each and every step through out this project, We acknowledge the cooperation, encouragement and austerity of our teacher, Mrs. Navjot Rathour whose guidance did half the magic of keeping us thrilled throughout this project.!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="img-circle img-responsive" src="IOT-1.png" alt=""></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 style="color:#3680C1">IOT</h4>
                <h4 class="subheading" style="color:#3680C1">(Internet Of Things)</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">The Internet of Things (IoT) is a system of interrelated computing devices, mechanical and digital machines, objects, animals or people that are provided with unique identifiers and the ability to transfer data over a network without requiring human-to-human or human-to-computer interaction.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image"><img class="img-circle img-responsive" src="EasyP.jpg" alt="" style="width:300px; height:155px;"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 style="color:#3680C1">Easy-Peasy</h4>
                <h4 class="subheading" style="color:#3680C1">Easy To Use</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">IOT or internet of things is an upcoming technology that allows us to control hardware devices through the internet. Here we propose to use IOT in order to control home appliances, thus automating modern homes through the internet. This system uses three loads to demonstrate as house lighting and a fan.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="img-circle img-responsive" src="user-friendly-interface.png" alt="" style="width:300px; height:145px;"></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 style="color:#3680C1">GUI</h4>
                <h4 class="subheading" style="color:#3680C1">Graphical User Interface</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted"> This website is user-freindly , It automatically adjust it's size and layout depeding on which device you are using. </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Be Part<br>
                Of Our<br>
                WORK!</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ===== Team Section ===== -->
<section id="team" class="bg-success">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">Our Team</h2>
        <h3 class="section-subheading text-muted">Individual commitment to a group effort - that is what makes a team work, a company work, a society work, a civilization work.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member"><img src="Akash.jpg" class="img-responsive img-circle" alt="" style="width:255px ; height:255px">
          <h4 style="color:#3680C1">Akash Chauhan</h4>
          <p class="text-muted">Team Leader</p>
          <ul class="list-inline social-buttons">
            <li><a href="https://github.com/chauhanakash152"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.facebook.com/akki8699"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/in/chauhanakash152/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member"><img src="Mihir.jpg" class="img-responsive img-circle" alt="" style="width:255px ; height:255px">
          <h4 style="color:#3680C1">Mihir Mishra</h4>
          <p class="text-muted">Lead Developer</p>
          <ul class="list-inline social-buttons">
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="https://www.facebook.com/shadeboy08"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/in/mihir-mishra-0ba068bb/"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member"><img src="Ketan.jpg" class="img-responsive img-circle" alt="" style="width:255px ; height:255px">
          <h4 style="color:#3680C1">Ketan Nainwal</h4>
          <p class="text-muted">Lead Designer</p>
          <ul class="list-inline social-buttons">
            <li><a href="https://github.com/ketan919"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===== Contact Us ===== -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color:#3680C1">Contact Us</h2>
        <h3 class="section-subheading text-muted">For any home-automation and IOT work.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name *" id="name" required>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email *" id="email" required>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Your Message *" id="message" required></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 col-md-offset-">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h3 style="color:#3680C1">Thank You For Using Our Home Automation System </h3>
        <h3 style="color:#3680C1">Copyright &copy; 2017 All Rights Reserved</h3>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</footer>
</body>
</html>
