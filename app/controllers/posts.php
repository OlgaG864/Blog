<?php 

include(ROOT_PATH.'/app/database/db.php');
include(ROOT_PATH.'/app/helpers/validatePost.php');


$topics=selectAll('topics');
$posts=selectAll('posts');

 $table="posts";
 $errors=array();
 $topic_id='';
 $title='';
 $body='';
 $published='';
 $id="";

if (isset($_GET['id'])){
    $post=selectOne($table,['id'=>$_GET['id']]);
    $id=$post['id'];
    $topic_id=$post['topic_id'];
    $title=$post['title'];
    $body=$post['body'];
    $published=$post['published'];
}



if(isset($_POST['add-post'])){

    $errors=validatePost($_POST);

    
    if(count($errors)==0){
        unset($_POST['add-post']);
        $_POST['user_id']=$_SESSION['id'];
        $_POST['published']=isset($_POST['published']) ? 1:0;
        $_POST['body']=htmlentities($_POST['body']);
    

        $post_id=create( $table,$_POST);
        
        $_SESSION['message']='Post created';
        $_SESSION['type']='success';
        header("location: ".BASE_URL.'/admin/posts/index.php');

    }else{
        $title=$_POST['title'];
        $body=$_POST['body'];
        $topic_id=$_POST['topic_id'];
        $published=isset($_POST['published']) ? 1:0;;
    }

   


}
// if(isset($_GET['id'])){
//     $id=$_GET['id'];
//     $topic=selectOne($table,['id'=>$id]);
//     $id=$topic['id'];
//     $name=$topic['name'];
//     $description=$topic['description'];
// }

if(isset($_POST['edit-post'])){
 $errors=validatePost($_POST);
   
 if(count($errors)== 0){
    $id=$_POST['id'];
    unset($_POST['edit-post'],$_POST['id']);
    $_POST['user_id']=1;
    $_POST['published']=isset($_POST['published']) ? 1:0;
    $_POST['body']=htmlentities($_POST['body']);


    $post_id=update( 'posts',$id,$_POST);
    
    $_SESSION['message']='Post updated';
    $_SESSION['type']='success';
    header("location: ".BASE_URL.'/admin/posts/index.php');
 

}else{
    $title=$_POST['title'];
    $body=$_POST['body'];
    $topic_id=$_POST['topic_id'];
    $published=isset($_POST['published']) ? 1:0;;
}

}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $count=delete($table,$id);
    $_SESSION['message']='Post deleted';
    $_SESSION['type']='error';
    header("location: ".BASE_URL.'/admin/posts/index.php');
    exit();

}

if(isset($_GET['published'])&&isset($_GET['p_id'])){
    $published =$_GET['published'];
    $p_id=$_GET['p_id'];
    $count=update('posts',$p_id,['published'=>$published]);
    $_SESSION['message']='Post changed';
    $_SESSION['type']='success';
    header("location: ".BASE_URL.'/admin/posts/index.php');
    exit();
}
?>