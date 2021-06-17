
<?php
include('config.php');
session_start();

if(isset($_POST['updatebtn']))
{

    $employee_id=$_POST['employee_id'];
    $name = $_POST['name'];
    $Job_name = $_POST['Job_name'];
    $Job_description = $_POST['Job_description'];
    $hiring_date = $_POST['hiring_date'];
    $employement_years= $_POST['employement_years'];
    $total_hours = $_POST['total_hours'];
    $leaves_allowed = $_POST['leaves_allowed'];
    $account_no = $_POST['account_no'];
    $salary= $_POST['salary'];
    $bonus = $_POST['bonus'];
    $growth = $_POST['growth'];
    $remarks = $_POST['remarks'];
 
    $phonenumber1 = $_POST['phonenumber1'];
    $phonenumber2 = $_POST['phonenumber2'];
    $employee_email = $_POST['employee_email'];
    $employee_father = $_POST['employee_father'];

    $age = $_POST['age'];
    $employee_cnic = $_POST['employee_cnic'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $gender= $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $previous_org = $_POST['previous_org'];
    $prev_job = $_POST['prev_job'];
    $prev_start_date = $_POST['prev_start_date'];
    $prev_end_date = $_POST['prev_end_date'];
    $degree_name = $_POST['degree_name'];
    $passing_year = $_POST['passing_year'];
    $institute_name = $_POST['institute_name'];
    $image= $_FILES["image"]['name'];

    $query="UPDATE tbl_employee SET name ='$name',Job_name='$Job_name',Job_description='$Job_description',hiring_date='$hiring_date',employement_years='$employement_years',total_hours='$total_hours',leaves_allowed='$leaves_allowed',account_no='$account_no',employee_cnic='$employee_cnic',salary='$salary',bonus='$bonus',growth='$growth',remarks='$remarks',phonenumber1='$phonenumber1',phonenumber2='$phonenumber2',employee_email='$employee_email',employee_father='$employee_father',age='$age',address='$address',city='$city',country='$country',gender='$gender',marital_status='$marital_status',previous_org='$previous_org',prev_job='$prev_job',prev_start_date='$prev_start_date',prev_end_date='$prev_end_date',degree_name='$degree_name',passing_year='$passing_year',institute_name='$institute_name',image='$image' where employee_id='$employee_id'";
     
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {   move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: employee.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: updateemployee.php'); 
    }
}

?>