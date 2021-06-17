<?php
include('config.php');
session_start();

if(isset($_POST['updatebtn']))
{

    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $cat_id = $_POST['cat_id'];
    $pro_type = $_POST['pro_type'];
    $description = $_POST['description'];
    $image1= $_FILES["image1"]['name'];
    $Price = $_POST['Price'];
    
    
    $query="UPDATE tbl_product SET pro_name ='$pro_name',description='$description',cat_id='$cat_id',pro_type='$pro_type',Price='$Price',image1='$image1' where pro_id='$pro_id'" ;
     
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["image1"]["tmp_name"], "uploads/".$_FILES["image1"]["name"]);
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: product.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: product.php'); 
    }
}

?>