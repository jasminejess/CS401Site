<?php 
    $pageName = "home";
    require_once "nav.php";

    session_start();

    if(!isset($_SESSION["access_granted"]) || !$_SESSION["access_granted"]) {
        $_SESSION['output'][] = "Must log in to access this page";
        header("Location: https://stormy-cliffs-79964.herokuapp.com/login.php");
    }
?>
<div>
  <div class="main-page">
    <div class="main-content">
    <p class="main-h1">More Photos</p>
      <ul id="lightslider">
       <li data-thumb="gallery_images/IMG_1636.jpg">
            <img src="gallery_images/IMG_1636.jpg" />
        </li>
        <li data-thumb="gallery_images/FullSizeRender.jpg">
            <img src="gallery_images/FullSizeRender.jpg" />
        </li>
         <li data-thumb="gallery_images/IMG_0316.jpg">
            <img src="gallery_images/IMG_0316.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_0520.jpg">
            <img src="gallery_images/IMG_0520.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_0523.jpg">
            <img src="gallery_images/IMG_0523.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1812.jpg">
            <img src="gallery_images/IMG_1812.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1818.jpg">
            <img src="gallery_images/IMG_1818.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1820.jpg">
            <img src="gallery_images/IMG_1820.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1882.jpg">
            <img src="gallery_images/IMG_1882.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1915.jpg">
            <img src="gallery_images/IMG_1915.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1934.jpg">
            <img src="gallery_images/IMG_1934.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1955.jpg">
            <img src="gallery_images/IMG_1955.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1965.jpg">
            <img src="gallery_images/IMG_1965.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_1968.jpg">
            <img src="gallery_images/IMG_1968.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2149.jpg">
            <img src="gallery_images/IMG_2149.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2166.jpg">
            <img src="gallery_images/IMG_2166.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2222.jpg">
            <img src="gallery_images/IMG_2222.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2449.jpg">
            <img src="gallery_images/IMG_2449.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2456.jpg">
            <img src="gallery_images/IMG_2456.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2467.jpg">
            <img src="gallery_images/IMG_2467.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2490.jpg">
            <img src="gallery_images/IMG_2490.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2492.jpg">
            <img src="gallery_images/IMG_2492.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2578.jpg">
            <img src="gallery_images/IMG_2578.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2678.jpg">
            <img src="gallery_images/IMG_2678.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2724.jpg">
            <img src="gallery_images/IMG_2724.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2742.jpg">
            <img src="gallery_images/IMG_2742.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2765.jpg">
            <img src="gallery_images/IMG_2765.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2780.jpg">
            <img src="gallery_images/IMG_2780.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2782.jpg">
            <img src="gallery_images/IMG_2782.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2788.jpg">
            <img src="gallery_images/IMG_2788.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2822.jpg">
            <img src="gallery_images/IMG_2822.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2853.jpg">
            <img src="gallery_images/IMG_2853.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_2941.jpg">
            <img src="gallery_images/IMG_2941.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_3348.jpg">
            <img src="gallery_images/IMG_3348.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_3468.jpg">
            <img src="gallery_images/IMG_3468.jpg" />
        </li>
        <li data-thumb="gallery_images/IMG_3591.jpg">
            <img src="gallery_images/IMG_3591.jpg" />
        </li>
      </ul>
    </div>
  </div>
</div>
<?php require_once "footer.php"; ?>