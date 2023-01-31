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
    array_push($errors,'Name is existing');
}

    return $errors;

}






?>