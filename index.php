<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rapid Lines | Book fligt tickets with ease</title>

    <?php include 'parts/meta.php'; ?>
</head>
<body id="page1">
<div class="main">
  <!--header -->
      <?php include 'parts/header.php'; ?>
  <!-- / header -->
  <!--content -->
  <section id="content">
    <div class="for_banners">
      <article class="col1">
        <div class="tabs">
          <ul class="nav">
            <li class="selected"><a href="#Flight">Flight</a></li>
            <li><a href="#Hotel">Hotel</a></li>
            <li class="end"><a href="#Rental">Rental</a></li>
          </ul>
          <div class="content">
            <?php include 'parts/flight.php'; ?>
          </div>
        </div>
      </article>
      <div id="slider"> <img src="images/banner1.jpg" alt=""> <img src="images/banner2.jpg" alt=""> <img src="images/banner3.jpg" alt=""> </div>
    </div>
  </section>
  <!--content end-->
  <!--footer -->
      <?php include 'parts/footer.php'; ?>
    <!--footer end-->
  </div>

      <?php include 'parts/script.php'; ?>
</body>
</html>