<?php include('path.php')?>

<?php 
include(ROOT_PATH .'/app/controllers/users.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
  <?php include("./app/includes/header.php");?>

    <div class="auth-content">
      <form action="register.php" method="post">
        <h2 class="form-title">Register</h2>
        
        <?php include(ROOT_PATH .'/app/helpers/formerrors.php')?>
 
        <div>
          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username;?>" class="text-input" />
  
        </div>
        <div>
          <label>Email</label>
          <input type="text" name="email"value="<?php echo $email;?>"class="text-input" />
      
        </div>
        <div>
          <label>Password</label>
          <input type="text" name="password" value="<?php echo $password;?>"class="text-input" />
    
     
        </div>
        <div>
          <label>Password confirm</label>
          <input type="text" name="passwordConf" value="<?php echo $passwordConf;?>"class="text-input" />
        </div>
        <div>
          <button type="submit" name="register-btn" class="btn btn big">
            Register
          </button>
        </div>
        <p>Or <a href="<?php echo BASE_URL. '/login.php'?>">Sign in</a></p>
      </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <script src="./assets/javascript/js.js"></script>
  </body>
</html>
