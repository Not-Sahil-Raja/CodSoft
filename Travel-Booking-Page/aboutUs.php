<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'bookdb');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="aboutUs-style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav>
    <a href="index.html">Home <span></span></a>
    <a href="loginSignupAndSearching\searchingPage.php">Packages <span></span></a>
    <a href="aboutUs.html">About Us <span></span></a>
    <a href="loginSignupAndSearching\login.html">Login <span></span></a>
  </nav>

  <div class="container">
    <div class="imgArea">
      <img src="https://images.unsplash.com/photo-1646204894336-20b4d52a2049?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
    </div>
    <div class="team">
      <div class="member">
        <span class="name">Joseph</span>
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fHJhbmRvbSUyMHByb2ZpbGUlMjBwaWN8ZW58MHx8MHx8fDA%3D" alt="" class="profilePic" />
        <p class="roles">Front End Dev</p>
      </div>
    </div>
    <div class="aboutUs">
      <span>Why This Company?</span>
      <p>
        Established in 2020, This Company has since positioned itself as one
        of the leading companies, providing great offers, competitive
        airfares, exclusive discounts, and a seamless online booking
        experience to many of its customers. The experience of booking your
        flight tickets, hotel stay, and holiday package through our desktop
        site or mobile app can be done with complete ease and no hassles at
        all. We also deliver amazing offers, such as Instant Discounts, Fare
        Calendar, MyRewardsProgram, MyWallet, and many more while updating
        them from time to time to better suit our customers’ evolving needs
        and demands.
      </p>
    </div>
    <div class="contactUs">
      <h1>GiveUS A FeedBack</h1>

      <div class="textArea">
        <form action="aboutUsRv.php" method="post">
          <div class="rvw">
            <input type="text" name="review" id="" required class="review" />
            <span>Write Your Review</span>
          </div>
          <div class="nm">
            <input type="text" name="name" id="" required class="name" />
            <span>Your Name</span>
          </div>

          <div class="submitBtn">
            <input type="submit" name="sendRev" value="Submit" id="reviewSubmit" />
          </div>
        </form>
      </div>

      <div class="contact-us">
        <div class="cu">
          <i class="fa-solid fa-envelope" style="color: #ffffff"></i>
          <a href="mailto:sahilraja2002@gmail.com?subject = Feedback&body = Message" class="mail">
            Contact US
          </a>
        </div>

        <div class="cu">
          <i class="fa-solid fa-phone" style="color: #ffffff"></i>
          <span>Phone No: 86145784XX </span>
        </div>
      </div>
    </div>
  </div>

  <div class="alertPopup" id="popup">
    <p>Review Submitted</p>
    <i class="fa-solid fa-square-check" style="color: #ffffff"></i>
  </div>
  <?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  ?>
    <script>
      // alert("done");
      let popup = document.getElementById("popup");
      popup.style.bottom = "3%";
      setTimeout(() => {
        popup.style.bottom = "-8%";
      }, 10000);
    </script>
  <?php
    unset($_SESSION['status']);
  }
  ?>
</body>

</html>