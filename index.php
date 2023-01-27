<?php 
include("path.php");
include(ROOT_PATH.'/app/database/db.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pattaya&family=Roboto:ital,wght@0,300;1,100;1,300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css
"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
  <?php include("./app/includes/header.php");?>
  <?php include("./app/includes/messages.php");?>

 
    <div class="page-wrapper">
      <div class="post-slider">
        <h1 class="slider-title">Trending posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

        <div class="post-wrapper">
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="slider-image"
            />
            <div class="post-info">
              <h4>
                <a href="single.html"
                  >One day your life will flash before your eyes</a
                >
              </h4>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
            </div>
          </div>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="slider-image"
            />
            <div class="post-info">
              <h4>
                <a href="single.html"
                  >One day your life will flash before your eyes</a
                >
              </h4>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
            </div>
          </div>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="slider-image"
            />
            <div class="post-info">
              <h4>
                <a href="single.html"
                  >One day your life will flash before your eyes</a
                >
              </h4>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
            </div>
          </div>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="slider-image"
            />
            <div class="post-info">
              <h4>
                <a href="single.html"
                  >One day your life will flash before your eyes</a
                >
              </h4>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
            </div>
          </div>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="slider-image"
            />
            <div class="post-info">
              <h4>
                <a href="single.html"
                  >One day your life will flash before your eyes</a
                >
              </h4>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
            </div>
          </div>
        </div>
      </div>

      <div class="content clearfix">
        <div class="main-content">
          <h1 class="recent-post-title">Recent Posts</h1>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="post-image"
            />
            <div class="post-preview">
              <h1><a href="single.html">The sweetest song</a></h1>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
              <p class="preview-text">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="post-image"
            />
            <div class="post-preview">
              <h1><a href="single.html">The sweetest song</a></h1>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
              <p class="preview-text">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>
          <div class="post">
            <img
              src="https://64.media.tumblr.com/e816f3682bd13f440383af719c8db95a/tumblr_pr610nidtz1tawn8uo1_1280.jpg"
              alt=""
              class="post-image"
            />
            <div class="post-preview">
              <h1><a href="single.html">The sweetest song</a></h1>
              <i class="far fa-user">Olga G.</i>
              &nbsp;
              <i class="far fa-calendar">Today</i>
              <p class="preview-text">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>
        </div>

        <div class="sidebar">
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="post">
              <input
                type="text"
                name="search-term"
                class="text-input"
                placeholder="search.."
              />
            </form>
          </div>
          <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Qutes</a></li>
              <li><a href="#">Stories</a></li>
              <li><a href="#">Inspiration</a></li>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Poems</a></li>
              <li><a href="#">Poems</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php include("./app/includes/footer.php");?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <script src="./assets/javascript/js.js"></script>
  </body>
</html>