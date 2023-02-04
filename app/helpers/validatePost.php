<?php 
function validatePost($post){

    
    $errors=array();

    if(empty($post['title'])){
        array_push($errors,'Title is required');
    }
 
    if(empty($post['body'])){
        array_push($errors,'some text is required');
    }
 
    if(empty($post['topic_id'])){
        array_push($errors,'topic is required');
    }
    if(empty($post['image'])){
        array_push($errors,'image is required');
    }
    $existingPost=selectOne('posts',['title'=>$post['title']]);
if(isset($existingPost)) {
    array_push($errors,'Title is existing');
}

    return $errors;

}






?>