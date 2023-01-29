<?php 
function validateTopic($topic){

    
    $errors=array();

    if(empty($user['name'])){
        array_push($errors,'Name is required');
    }
    
    if(empty($user['description'])){
        array_push($errors,'description is required');
    }
 
    $existingTopic=selectOne('topic',['name'=>$topic['name']]);
if(isset($existingTopic)) {
    array_push($errors,'Name is existing');
}

    return $errors;

}






?>