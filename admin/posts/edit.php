
<?php include("../../path.php")?>
<?php include(ROOT_PATH.'/app/controllers/posts.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add post</title>
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
    <link rel="stylesheet" href="../../admin/editor/css/widgEditor.css" />
    <script src="../../admin/editor/scripts/widgEditor.js"></script>
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
          <h2 class="page-title">Add posts</h2>

          <form action="edit.php" method="post" >
          <input type="hidden" name="id" value="<?php echo $id;?>"  />
          <?php include(ROOT_PATH .'/app/helpers/formrrors.php')?>
            <div>
              <label>Title</label>
              <input type="text" name="title" value="<?php echo $title;?>" class="text-input" />
            </div>
            <div>
            <textarea value="<?php echo $body;?>" name="body" >Some text here</textarea>
            </div>
            <div>
              <label>Image</label>
              <input type="file" name="image" class="text-input" />
            </div>
            <div>
              <label>Topic</label>
              <select name="topic_id" class="text-input">
              <?php foreach ($topics as $key=>$topic):?>
                <?php if(!empty($topic_id)&& $topic_id ==$topic['id']):?>
                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php else:?>
                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                    <?php endif ;?>
                <?php endforeach;?>
              </select>
              <div>
                <?php if(empty($published)):?>

                <label>
                <input type="checkbox" name="published"  />
                Publish
                </label>
                <?php else:?>
                    <label>
                <input type="checkbox" name="published" checked />
                Publish
                </label>


                    <?php endif;?>
            
              </div>
             
            </div>
            <div>
              <button type="submit" name="edit-post" class="btn btn-big">Add post</button>
            </div>
          </form>
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
