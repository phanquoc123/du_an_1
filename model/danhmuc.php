<?php

function add_category($name_category){
    $sql = "INSERT INTO `category`(`name_category`) VALUES ('$name_category')";
    pdo_execute($sql);
}
function show_all_category(){
    $sql ="SELECT * FROM `category` WHERE 1";
    $list_category = pdo_query($sql);
    return $list_category;
}
function delete_category($id_category){
    $sql = "DELETE FROM `category` WHERE id_category=".$id_category;
    pdo_execute($sql);
}

?>