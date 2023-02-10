<?php 
include("path.php");

include(ROOT_PATH .'/app/controllers/topics.php');


$posts=array();
$postTitle='Recent Posts';

if(isset($_POST['search-term'])){

 $postTitle="You serached for " . $_POST ['search-term'];
$posts=searchPosts($_POST['search-term']);

}else{
  $posts=getPublishedPosts();

};



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

          <?php foreach($posts as $post):?>
          <div class="post">
            <img
              src="<?php echo BASE_URL .'/assets/images/freedom-g31f6c843a_640.jpg';?>"
              alt=""
              class="slider-image"
            />
            <div class="post-info">
              <h4>
                <a href="single.html"
                  ><?php echo $post['title'];?></a
                >
              </h4>
              <i class="far fa-user"><?php echo $post['username'];?></i>
              &nbsp;
              <i class="far fa-calendar"><?php echo date('F j,Y',strtotime($post['created_at']));?></i>
            </div>
          </div>
          <?php endforeach;?>
     
          </div>
      </div>

      <div class="content clearfix">
        <div class="main-content">
          <h1 class="recent-post-title"><?php echo $postTitle;?></h1>

          <?php foreach($posts as $post):?>

            
          <div class="post clearfix">
            <img
              src="<?php echo BASE_URL .'/assets/images/background-g348a3cb00_640.jpg';?>"
              alt=""
              class="post-image"
            />
            <div class="post-preview">
              <h1><a href="single.html"><?php echo $post['title'];?></a></h1>
              <i class="far fa-user"><?php echo $post['username'];?></i>
              &nbsp;
              <i class="far fa-calendar"><?php echo date('F j,Y',strtotime($post['created_at']));?></i>
              <p class="preview-text">
            <?php echo substr($post['body'],0,150). '...'?>
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>

            <?php endforeach;?>


        
         
        </div>

        <div class="sidebar">
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.php" method="post">
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
            <?php foreach ($topics as$key=>$topic):?>
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