<?php
require_once './functions/db.php';
require_once './featch/collect_home_items.php';
?>
<!DOCTYPE html >
<html lang="en">
<?php include("assets/components/meta.php")?>
<?php include("assets/components/loader.php")?>
 <?php include("assets/components/sidebar.php") ?>
<?php include("assets/components/searchbar.php")?>
<body onload="function_loader()" > 
  <main>
    <article class="cont_1"> 
      <section class="section hero" id="home" onscroll="hideme()">
        <h1  data-heading="EKTHA'23">
          EKTHA'23
        </h1>
      </section>
      <head>

  <!---- carousel table start--->
      <div class="section-wrapper" >
      <section class="section featured-game" id="features" aria-label="featured game"></section>
        <div class="container"></div>

          <h2 class="h2 section-title">
            All Released <span class="span">Games</span>
          </h2>
<?php
$hsql1 = "SELECT * FROM section_home WHERE section = 'section_1'";
$result = mysqli_query($dbcon, $hsql1);

while($row = mysqli_fetch_array($result))
{

?>
        <div class="carousel_sec1">
        <?php

$hsql2 = "SELECT * FROM section_1";
$result = mysqli_query($dbcon, $hsql2);

while($row = mysqli_fetch_array($result))
{

?>
	<div class="carousel-item">
		<div class="carousel-box">
			<div class="title"><?php  echo  "$row[title]";?></div>
			<img src="<?php  echo  "$row[image]";?>" />
		</div>
	</div>
  <?php } }?>
</div>
<div class="cursor"></div>
<div class="cursor cursor2"></div>
        <!---- carousel table end --->



   
        
         
    <!--------------------------------------------Section  2 start ---------------------------------------------------------------->

    <div class="section-wrapper" >
      <section class="section featured-game" id="features" aria-label="featured game">
      <h2 class="h2 section-title">
             PRO<span class="span">SHOW</span>
          </h2>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="banner">
        <div id="dg-container" class="dg-container">
            <div class="dg-wrapper">
                <a href="#">
                    <img src="//placehold.it/300x300" class="img-fluid" >
                </a>
                <a href="#">
                    <img src="//placehold.it/300x300" class="img-fluid" >
                </a>
                <a href="#">
                    <img src="//placehold.it/300x300" class="img-fluid" >
                </a>
                <a href="#">
                    <img src="//placehold.it/300x300" class="img-fluid" >
                </a>
                <a href="#" >
                    <img src="//placehold.it/300x300" class="img-fluid" >
                </a>
            </div>
            <ol class="button" id="lightButton">
                <li index="0">
                <li index="1">
                <li index="2">
                <li index="3">
                <li index="4">
            </ol>
            <nav>
                <span class="dg-prev"></span>
                <span class="dg-next"></span>
            </nav>
</div>
    </div>
</section>

</div>

    <!--------------------------------------------Section  2 end---------------------------------------------------------------->



      <!-- 
        - #FEATURED GAME
      -->

      <section class="section featured-game" id="features" aria-label="featured game">
        <div class="container">

          <h2 class="h2 section-title">
            All Released <span class="span">Games</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-1.jpg" width="450" height="600" loading="lazy"
                    alt="Just for Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-2.jpg" width="450" height="600" loading="lazy"
                    alt="Need for Speed" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Need for <span class="span">Speed</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Need for <span class="span">Speed</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-3.jpg" width="450" height="600" loading="lazy"
                    alt="Egypt Hunting Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Egypt Hunting <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Egypt Hunting <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-4.jpg" width="450" height="600" loading="lazy"
                    alt="Just for Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SHOP
      -->

      <section class="section shop" id="shop" aria-label="shop" >
        <div class="container">

          <h2 class="h2 section-title">
            Gaming Product <span class="span">Corner</span>
          </h2>

          <p class="section-text">
            Compete with 100 players on a remote island for winner takes showdown known issue where certain skin
            strategic
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-1.jpg" width="300" height="260" loading="lazy"
                    alt="Women Black T-Shirt" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">t-shirt</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Women Black T-Shirt</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-2.jpg" width="300" height="260" loading="lazy"
                    alt="Gears 5 Xbox Controller" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">x-box</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Gears 5 Xbox Controller</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-3.jpg" width="300" height="260" loading="lazy"
                    alt="GeForce RTX 2070" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Graphics</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">GeForce RTX 2070</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-4.jpg" width="300" height="260" loading="lazy"
                    alt="Virtual Reality Smiled" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">VR-Box</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Virtual Reality Smiled</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">
            Latest News & <span class="span">Articles</span>
          </h2>

          <p class="section-text">
            Compete With 100 Players On A Remote Island For Winner Takes Showdown Known Issue Where Certain Skin
            Strategic
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/blog-1.jpg" width="400" height="290" loading="lazy"
                    alt="Shooter Action Video" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Shooter Action Video</a>
                  </h3>

                  <p class="card-text">
                    Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/blog-2.jpg" width="400" height="290" loading="lazy" alt="The Walking Dead"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">The Walking Dead</a>
                  </h3>

                  <p class="card-text">
                    Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/blog-3.jpg" width="400" height="290" loading="lazy"
                    alt="Defense Of The Ancients" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Defense Of The Ancients</a>
                  </h3>

                  <p class="card-text">
                    Compete With 100 Players On A Remote Island Thats Winner Takes Showdown Known Issue.
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section brand cont_1" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="./assets/images/brand-1.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-2.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-4.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-5.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-6.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
        
      </section>



      <!-- 
        - #NEWSLETTER
      -->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <h2 class="h2">
              Our <span class="span">Newsletter</span>
            </h2>
  
            <form action="" class="newsletter-form">

              <div class="input-wrapper skewBg">
                <input type="email" name="email_address" aria-label="email" placeholder="Enter your email..." required
                  class="email-field">

                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <button type="submit" class="btn newsletter-btn skewBg">
                <span class="span">Subscribe</span>

                <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>

  <?php include("assets/components/footer.php")?>

  <?php include("assets/components/scripts.php")?>
</body>

</html>