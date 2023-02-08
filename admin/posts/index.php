<?php include("../../path.php")?>
<?php include(ROOT_PATH.'/app/controllers/posts.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Post</title>
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
    <link rel="stylesheet" href="../../assets/css/style.css" />
    <link rel="stylesheet" href="../../assets/css/admin.css" />
  </head>
  <body>

<?php include(ROOT_PATH."/app/includes/admi-header.php");?>
    <div class="admin-wrapper">
  
<?php include(ROOT_PATH. "/app/includes/sidebar.php");?>

      <div class="admin-content">
        <div class="button-group">
          <a href="create.php" class="btn btn-big">Add posts</a>
          <a href="index.php" class="btn btn-big">Manage posts</a>
        </div>
        <div class="content">
            
      
        
        <h2 class="page-title">Manage posts</h2>

        <?php include(ROOT_PATH .'/app/helpers/formrrors.php')?>
        <?php include( ROOT_PATH. "/app/includes/messages.php");?>

          <table>
            <thead>
              <th>SN</th>
              <th>Title</th>
              <th>Author</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php foreach ($posts as $key=>$post):?>

              <tr>
                <td><?php echo $key+1;?></td>
                <td><?php echo $post['title'];?></td>
                <td>Olga</td>

                <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">Edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id'];?>" class="delete">Delete</a></td>
                <?php if($post['published']):?>
                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']?>" class="unpublish">Unpublish</a></td>
                    <?php else:?>
                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']?>" class="publish">Publish</a></td>

                    <?php endif;?>
              </tr>
             <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script
      src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/plugins.min.js"
      referrerpolicy="origin"
    ></script>
    ;

    <script src="../../assets/javascript/js.js"></script>
  </body>
</html>

