<?php
    //pagination
    $per_page = 9;
    if(isset($_GET['page'])){
        
        $page = $_GET['page'];
    }
    else {
        $page = "";
    }
    if($page == "" || $page == 1){
        $page_1 = 0;
    }
    else {
        $page_1 = ($page*$per_page)-$per_page;
    }
    $category_count_query = "SELECT * FROM categories WHERE parent_cat_id IS NULL";
    $find_count = mysqli_query($connection,$category_count_query);
    $count = mysqli_num_rows($find_count);
    $count = ceil($count / $per_page);
    //echo $count;

?>