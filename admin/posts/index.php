<?php include("../../path.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Topic</title>
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
          <a href="create.php" class="btn btn-big">Add topic</a>
          <a href="index.php" class="btn btn-big">Manage topics</a>
        </div>
        <div class="content">
        
        <h2 class="page-title">Manage posts</h2>
          <table>
            <thead>
              <th>SN</th>
              <th>SN</th>
              <th>SN</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>This is the first post</td>

                <td><a href="#" class="edit">Edit</a></td>
                <td><a href="#" class="delete">Delete</a></td>
                <td><a href="#" class="publish">Publish</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>This is the second post</td>

                <td><a href="#" class="edit">Edit</a></td>
                <td><a href="#" class="delete">Delete</a></td>
                <td><a href="#" class="publish">Publish</a></td>
              </tr>
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

