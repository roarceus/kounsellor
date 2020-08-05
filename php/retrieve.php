<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kounsellor</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

  <div id="container">
    <div id="header">
      <div id="logoname">
        <a href="retrieve.php"><h1>KOUNSELLOR</h1></a>
      </div>
      <div id="logo">
        <img src="../images/logo.png" alt="KounsellorLogo" height="80px">
      </div>
    </div>
    
    <div id="menu">
      <nav>
        <div>
                  <i class="fa fa-bars"></i>
              </div>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">STREAMS <i class="fa fa-sort-desc"></i></a>
            <ul>
              <li><a href="#">Engineering</a></li>
              <li><a href="#">Junior College</a></li>
              <li><a href="#">School</a></li>
            </ul>
          </li>
          <li><a href="../html/aboutret.html">ABOUT US</a></li>
          <li><a href="../html/faqret.html">FAQ</a></li>
          <li><a href="../html/grievanceret.html">Grievance</a></li>
          
          <li id="userfont2"><a href="#">


          <?php  if (isset($_SESSION['username'])) : ?>
            <?php echo $_SESSION['username']; ?>
          <?php endif ?>


          </a>
                
                  <ul>
                    <li id="logout"><a href="../index.html">



                  <?php  if (isset($_SESSION['username'])) : ?>
                    <a href="../index.html">Logout</a>
                  <?php endif ?>



                    </a></li>
                  </ul>

          </li>

          <li id="searchbtn"><i class="fa fa-search"><input id="searchbox" type="text" name="search" placeholder="Search.."></i></li>
          <li id="resplog"><a href="php/login.php">Login</a></li>
        </ul>
        
      </nav>
    </div>
    
    <div id="mainbody">
      <div id="bodyimg">
        
      </div>

      </div>

      <div id="review">
        REVIEWS
        
      </div>


      <div class="row">
          <div class="column">
            <div class="card">
      
               <div class="container">
                  <h2>Anthony Mackie</h2>
                  <p class="title">Forbes Magazine</p>
                  <p>Rating - 5/5</p>
                  <p><a href="../html/review1.html" target="_blank"><button class="button">Read review</button></a></p>
                </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
      
               <div class="container">
                  <h2>Saurabh Kapadia</h2>
                  <p class="title">Hindustan Times</p>
                  <p>Rating - 4.5/5</p>
                  <p><a href="../html/review2.html" target="_blank"><button class="button">Read review</button></a></p>
                </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
      
               <div class="container">
                  <h2>Touka Kirishima</h2>
                  <p class="title">Japan Student Services Organization</p>
                  <p>Rating - 5/5</p>
                  <p><a href="../html/review3.html" target="_blank"><button class="button">Read review</button></a></p>
                </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
      
               <div class="container">
                  <h2>Aaron Paul</h2>
                  <p class="title">Frontline Magazine</p>
                  <p>Rating - 4/5</p>
                  <p><a href="../html/review4.html" target="_blank"><button class="button">Read review</button></a></p>
                </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
     
               <div class="container">
                  <h2>Ken Kaneki</h2>
                  <p class="title">New York Times</p>
                  <p>Rating - 5/5</p>
                  <p><a href="../html/review5.html" target="_blank"><button class="button">Read review</button></a></p>
                </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
      
                <div class="container">
                  <h2>Elizabeth Warren</h2>
                    <p class="title">MIT Madame Chair</p>
                    <p>Rating - 4.5/5</p>
                    <p><a href="../html/review6.html" target="_blank"><button class="button">Read review</button></a></p>
                </div>
            </div>
          </div>
      </div>

    </div>
    
    <div id="footer">
      <div id="foot">
        <div id="footername">
          <h1>Kounsellor</h1>
        </div>
        <div id="footerlogo">
          <img src="../images/logo.png" alt="KounsellorLogo" height="80px">
          </div>
        <div id="footerinfo">
          Here we will put some information about the website about what this website is for. Four to five lines like this would be enough.<br /><h3>Connect with us.</h3>
        </div>
        <div id="footericons">
          <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-instagram"></i></a>
        </div>
      </div>

      <div id="footercontact">
        <h3>Contact Us.</h3><br />
        <div id="contacticons">
          <i class="fa fa-envelope">&emsp;xyz@gmail.com</i><br /><br />
          <i class="fa fa-phone">&emsp;9876543210</i><br /><br />
          <i class="fa fa-map">&emsp;400069 Mountain View, California</i>
        </div>
      </div>

      <div id="subscribe">
        <h3>Subscribe to us!</h3><br />
        <input type="text" name="subs" id="sub" placeholder="Enter email address.."><button id="subsbutton">Submit</button>
        
      </div>
      
    </div>  
  </div>

  <script type="text/javascript">

      $("div nav div").click(function() {
            $("ul").slideToggle();
            $("ul ul").css("display", "none");
      });

      $("ul li").click(function() {
            $("ul ul").slideUp();
            $(this).find('ul').slideToggle();
      });

      $(window).resize(function() {
            if($(window).width() > 500) {
                  $("ul").removeAttr('style');
            }
      });
      $(document).ready(function(){
        $("#searchbox").hide();
      });
     
      $("#searchbtn").click(function(){
          $("#searchbox").show(500);
        });

  </script>
  
</body>
</html>