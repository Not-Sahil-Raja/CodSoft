<?php
$conn = mysqli_connect('localhost', 'root', '', 'bookdb');
if (isset($_POST['search'])) {
  $searchKey = $_POST['search'];
  $sql = "select * from book where city like '%$searchKey%'";
} else
  $sql = "select * from book";
$all_product = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="searchingPage-style.css" />
</head>

<body>
  <nav>
    <a href="/project/index.html">Home <span></span></a>
    <a href="searchingPage.php">Packages <span></span></a>
    <a href="/project/aboutUs.php">About Us <span></span></a>
    <a href="login.html">Login <span></span></a>
  </nav>

  <div class="searchArea">
    <form action="" method="POST">
      <input type="text" class="destination" placeholder="Search Your Destination" name="search" />
      <button class="search" name="submit">Search</button>
    </form>

  </div>


  <div class="packages">
    <!-- cards -->
    <?php
    while ($row = mysqli_fetch_assoc($all_product)) {
    ?>
      <div class="card">
        <img class="pkgImg" src="<?php echo $row["image"]; ?>" alt="" />
        <div class="packageDetails">
          <span class="packageName"><?php echo $row["city"]; ?></span>
        </div>
        <div class="price-book">
          <p class="packagePrice">₹<?php echo $row["price"]; ?></p>
          <button class="bookingBtn">Book now</button>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
  <script src="scriptSearching.js"></script>
</body>

</html>