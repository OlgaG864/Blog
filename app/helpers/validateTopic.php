<?php 
function validateTopic($topic){

    
    $errors=array();

    if(empty($topic['name'])){
        array_push($errors,'Name is required');
    }
    
    if(empty($topic['description'])){
        array_push($errors,'description is required');
    }
 
    $existingTopic=selectOne('topics',['name'=>$topic['name']]);
if(isset($existingTopic)) {
    if(isset($post['update-topic'])&& $existingTopic['id']!=$post['id']){

        array_push($errors,'Title is existing');
    }
    if(isset($post['add-topic'])){
        array_push($errors,'Name is existing');

    }
   
}

    return $errors;

}






?>