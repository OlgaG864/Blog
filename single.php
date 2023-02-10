
<?php 
include("path.php");
include(ROOT_PATH .'/app/controllers/posts.php');


if(isset($_GET['id'])){
  $post=selectOne('posts',['id'=>$_GET['id']]);

}

$posts=selectAll('posts',['published'=>1]);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Single page</title>
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
    <title><?php echo $post['title'];?>| OlgaInspires</title>
  </head>
  <body>
    <div id="fb-root"></div>
    <script
      async
      defer
      crossorigin="anonymous"
      src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0"
      nonce="7YGxqAAq"
    ></script>
    <?php include("./app/includes/header.php");?>

    <div class="page-wrapper">
      <div class="content clearfix">
        <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title'];?></h1>

          <div class="post-content">
     <?php echo $post['body'];?>
          </div>
        </div>

        <div class="sidebar single">
          <div
            class="fb-page"
            data-href="https://www.facebook.com/facebook"
            data-tabs=""
            data-width=""
            data-height=""
            data-small-header="false"
            data-adapt-container-width="true"
            data-hide-cover="false"
            data-show-facepile="true"
          >
            <blockquote
              cite="https://www.facebook.com/facebook"
              class="fb-xfbml-parse-ignore"
            >
              <a href="https://www.facebook.com/facebook">Facebook</a>
            </blockquote>
          </div>
          <div class="section popular">
            <h2 class="section-title">Popular</h2>
        
            <?php foreach ($posts as $p):?>
              <div class="post clearfix">
              <img
                src="https://cdn.pixabay.com/photo/2020/12/28/20/45/frozen-lake-5868472_960_720.jpg"
                alt=""
              />
              <a href="" class="title"><h4><?php echo $p['title']?></h4></a>
            </div>
            <?php endforeach ;?>

          </div>

        
       
          <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
            <?php foreach ($topics as $topic):?>
              <li><a href="#"><?php echo $topic['name'];?></a></li>
        <?php endforeach; ?>
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
