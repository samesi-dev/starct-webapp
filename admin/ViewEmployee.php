<?php
session_start();
require_once "config.php";
include("functions.php");
$id= get_safe_value($conn,$_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="STARCT">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>STARCT- Dashboard</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
 @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap');

 body {
  background: #262626;
  font-family: raleway;
  color: white;
  margin: 0;
}

.popup .content {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-150%) scale(0);
 width: 1200px;
 height: 500px;
 z-index: 2;
 text-align: center;
 padding: 20px;
 border-radius: 20px;
 background: #fff;
 box-shadow:  5px 5px 5px #1e1e1e, 
             -2px -2px 3px #1e1e1e;
 z-index: 1;
}

.popup .close-btn {
 position: absolute;
 right: 20px;
 top: 20px;
 width: 30px;
 height: 30px;
 color: white;
 font-size: 30px;
 border-radius: 50%;
 padding: 2px 5px 7px 5px;

 
 }

.popup.active .content {
transition: all 300ms ease-in-out;
transform: translate(-50%,-50%) scale(1);
}

h1 {
 text-align: center;
 font-size: 32px;
 font-weight: 600;
 padding-top: 20px;
 padding-bottom: 10px;
}



input {
padding: 7px;
font-size: 14px;
border-radius: 10px;
border: none;
margin-bottom: 15px;
color: black;
background: whitesmoke;

outline: none;
}

select {
padding: 7px;
font-size: 16px;
border-radius: 10px;
border: none;
margin-bottom: 15px;
color: black;
background: whitesmoke;

outline: none;
}

textarea {
padding: 10px;
font-size: 16px;
border-radius: 10px;
border: none;

color: black;
background: whitesmoke;

outline: none;
}


.second-button {
color: white;
font-size: 18px;
font-weight: 500;
margin-top: 20px;
padding: 15px;
border-radius: 5px;
border: none;
background: blue;

outline: none;
}

p{
color: #bfc0c0;
padding: 20px;
}

</style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle" style="font-family: 'Sui Generis';">STARCT</span>
                </a>

                <ul class="sidebar-nav">
               
                <li class="sidebar-header">
                    Dashboard
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="index.html">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                        <i class="align-middle " data-feather="inbox"></i> <span class="align-middle">Messages</span>
                        </a>
                    </li>

                   

                    <li class="sidebar-header">
                    Task Management
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-in.html">
                        <i class="align-middle " data-feather="layers"></i> <span class="align-middle">Projects</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-sign-up.html">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Tasks</span>
                        </a>
                    </li>



                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">
                        <i class="align-middle " data-feather="calendar"></i> <span class="align-middle">Events</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                    Employee Management
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="employee.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Employees</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-typography.html">
                        <i class="align-middle " data-feather="credit-card"></i> <span class="align-middle">Payroll</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                    Order Management
                    </li>

                    
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-forms.html">
                        <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">E-commerce</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="product.php">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Products</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="services.php">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Services</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">
                        <i class="align-middle " data-feather="file"></i> <span class="align-middle">Orders</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-feather.html">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle">Clients</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                    Other Expenses
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Other Expenses</span>
                        </a>
                    </li>

                </ul>

            
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.</div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
            <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Profile</h1>
            
            </div>

                <?php
              $id= get_safe_value($conn,$_GET['id']);
                $query = "SELECT * FROM tbl_employeedata where id ='$id'";
                $res = mysqli_query($conn, $query);
                foreach($res as $row){
                ?>        
                          
                  
        <form action="updateemployee.php" method="POST" > 
                        <div class="popup col-md-8 col-xl-10"" id="popup-1">
                        <div class="content container">
                     
                            <div style="color: black;" class="close-btn" onclick="togglePopup()">
                            ×</div>
                              
                        <h3>Update Employee Information</h3> 
                        <BR>
                        <div>
                        <input type="hidden" placeholder="Employee Id..."  name="id" value="<?php echo $row['id']?>" required>   
                            <input type="text" placeholder="Employee Name..."  name="name" value="<?php echo $row['name']?>" required>   
                            <input type="text" placeholder="Job Name..."  name="Job_name" value="<?php echo $row['Job_name']?>" required>      
                            <input  type="text" placeholder="Job Description..." name="Job_description" value="<?php echo $row['Job_description']?>" > 
                            <input type="date" placeholder="Hiring Date..." name="hiring_date" value="<?php echo date('Y-m-d',strtotime($row['hiring_date']))?>" required>    
                            <input type="number" placeholder="Employement Years..."  name="employement_years" value="<?php echo $row['employement_years']?>" required>
                            <input type="number" placeholder="Total Hours..."  name="total_hours" value="<?php echo $row['total_hours']?>" required>   
                            <input type="number" placeholder="Leaves Allowed..." name="leaves_allowed" value="<?php echo $row['leaves_allowed']?>" required>
                            <input placeholder="Account No..."  name="account_no" value="<?php echo $row['account_no']?>" required>
                            <input  type="number" placeholder="Salary..."name="salary" value="<?php echo $row['salary']?>" required> 
                            <input  type="number"  placeholder="Bonus..."name="bonus" value="<?php echo $row['bonus']?>" >
                            <input   placeholder="Growth..." name="growth" value="<?php echo $row['growth']?>" >
                          
                            </div>
                            <div>
                           
                             <input type="text" placeholder="Employee Father's Name..." name="employee_father" value="<?php echo $row['employee_father']?>" required>   
                             <input type="text" placeholder="Employee's age" name="age" value=" <?php echo $row['age']?>" required> 
                             <input type="text" placeholder="Employee CNIC No." name="employee_cnic" value=" <?php echo $row['employee_cnic']?>" required>
                            <input  type="text" placeholder="Employee's Address " name="address" value="<?php echo $row['address']?>" required> 
                              <input type="text" placeholder="Employee's city" name="city" value="<?php echo $row['city']?>"  required>  
                              <input type="text" placeholder="Employee's country"  name="country" value="<?php echo $row['country']?>" required> 
                              <br> 
                             <select placeholder="Gender" name="gender" value="<?php echo $row['gender']?>" required>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                    </select>   
                                 <select placeholder="Marital Status" name="marital_status" value="<?php echo $row['marital_status']?>" required>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                    </select> 
                                                                    </div>                        
                          <div>

                          <input type="tel" placeholder="Employee Phone Number 1" name="phonenumber1" value="<?php echo $row['phonenumber1']?>" required>      
                        <input  type="tel" placeholder="Phone number 2" name="phonenumber2" value="<?php echo $row['phonenumber2']?>" >  
                          <input type="email" placeholder="Employee email" name="employee_email" value="<?php echo $row['employee_email']?>" required> 
                          </div>
                
                        <input type="text" placeholder="Degree Name"  name="degree_name" value="<?php echo $row['degree_name']?>" >
                        <input type="year" placeholder="Graduation Year" name="passing_year" value="<?php echo $row['passing_year']?>" >
                        <input type="text" placeholder="Institute Name"  name="institute_name" value="<?php echo $row['institute_name']?>" >

                           <input type="text" placeholder="Previous Organization Name"  name="previous_org"  value="<?php echo $row['previous_org']?>" >
                            <input type="text" placeholder="Previous Job Name" name="prev_job"  value="<?php echo $row['prev_job']?>">
                            <input type="date" placeholder="Previous Job Start Date"  name="prev_start_date"  value="<?php echo date('Y-m-d',strtotime($row['prev_start_date']))?>">
                            <input type="date" placeholder="Previous Job End Date" name="prev_end_date"  value="<?php echo date('Y-m-d',strtotime($row['prev_end_date']))?>">
                       <a> <button  type="submit" name="updatebtn" class="second-button">update</button></a> 
 
                         </form> 
                         <?php   } ?>
   
   </div>
  </div>
 


    

    <div class="col-md-8 col-xl-12">
        <div class="card">
          <div class="card-header">  
            <h5 class="card-title mb-0">Employee Information</h5>
          </div>
               <?php
                $query = "SELECT *  FROM tbl_employeedata where id ='$id'";
                $query_run = mysqli_query($conn, $query);
                ?>                                      
            <div class="card-body h-100">
                <div class="d-flex align-items-start">      
                <div style="overflow-x:auto;" class="flex-grow-1">
                  <table  class="table table-hover">
                   <thead>
                    <tr>
                    <th scope="col">Emp No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Job Title</th>
                    <th scope="col"> Job Description</th>
                    <th scope="col">Hiring Date</th>
                    <th scope="col">Employement Years</th>
                    <th scope="col">Total Hours</th>
                    <th scope="col">Leaves Allowed</th>
                    <th scope="col">Account No.</th>
                    <th scope="col">Salary </th>
                    <th scope="col">Bonus</th>
                    <th scope="col">Growth</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">CNIC No.</th>
                    <th scope="col">Address</th>
                    <th scope="col">City </th>
                    <th scope="col">Country</th>
                    <th scope="col">Gender</th>
                    <th scope="col">MARSA</th>
                    <th scope="col">Phone No.1</th>
                    <th scope="col">Phone No.2 </th>
                    <th scope="col">Email</th>
                    <th scope="col">Degree Name</th>
                    <th scope="col">Graduation Year</th>
                    <th scope="col">Institute Name</th>
                    <th scope="col">Previous Organization </th>
                    <th scope="col">Previous Job Name</th>
                    <th scope="col">Job Start Date</th>
                    <th scope="col">Job End Date</th>
                    <th scope="col">Action</th>
                    
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                               <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['Job_name']; ?></td>
                                <td><?php  echo $row['Job_description']; ?></td>
                                <td><?php  echo $row['hiring_date']; ?></td>
                                <td><?php  echo $row['employement_years']; ?></td>
                                <td><?php  echo $row['total_hours']; ?></td>
                                <td><?php  echo $row['leaves_allowed']; ?></td>
                                <td><?php  echo $row['account_no']; ?></td>
                                <td><?php  echo $row['salary']; ?></td>
                                <td><?php  echo $row['bonus']; ?></td>
                                <td><?php  echo $row['growth']; ?></td>
                                <td><?php  echo $row['remarks']; ?></td>
                                <td><?php  echo $row['employee_father']; ?></td>
                                <td><?php  echo $row['age']; ?></td>
                                <td><?php  echo $row['employee_cnic']; ?></td>
                                <td><?php  echo $row['address']; ?></td>
                                <td><?php  echo $row['city']; ?></td>
                                <td><?php  echo $row['country']; ?></td>
                                <td><?php  echo $row['gender']; ?></td>
                                <td><?php  echo $row['marital_status']; ?></td>
                                <td><?php  echo $row['phonenumber1']; ?></td>
                                <td><?php  echo $row['phonenumber2']; ?></td>
                                <td><?php  echo $row['employee_email']; ?></td>
                                <td><?php  echo $row['degree_name']; ?></td>
                                <td><?php  echo $row['passing_year']; ?></td>
                                <td><?php  echo $row['institute_name']; ?></td>
                                <td><?php  echo $row['previous_org']; ?></td>
                                <td><?php  echo $row['prev_job']; ?></td>
                                <td><?php  echo $row['prev_start_date']; ?></td>
                                <td><?php  echo $row['prev_end_date']; ?></td>
                                <td><a><button  onclick="togglePopup()"class="btn btn-primary"> Edit</button></a></td>
                                </tr>
                              <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                   
                        </tr>
                
                        </tbody>
                        </table>

                    </div>
                    </div>

                <hr/>

       


                <br>




                         
          </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" target="_blank"><strong>STARCT TEAM</strong></a> &copy;
                            </p>
                        </div>
                   
                    </div>
                </div>
            </footer>
        </div>
    </div>

    

    <script src="js/app.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: window.theme.primary,
                        data: [
                            2115,
                            1562,
                            1584,
                            1892,
                            1587,
                            1923,
                            2566,
                            2448,
                            2805,
                            3438,
                            2917,
                            3327
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 1000
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Chrome", "Firefox", "IE"],
                    datasets: [{
                        data: [4306, 3801, 1689],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger
                        ],
                        borderWidth: 5
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 75
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var markers = [{
                coords: [31.230391, 121.473701],
                name: "Shanghai"
            }, {
                coords: [28.704060, 77.102493],
                name: "Delhi"
            }, {
                coords: [6.524379, 3.379206],
                name: "Lagos"
            }, {
                coords: [35.689487, 139.691711],
                name: "Tokyo"
            }, {
                coords: [23.129110, 113.264381],
                name: "Guangzhou"
            }, {
                coords: [40.7127837, -74.0059413],
                name: "New York"
            }, {
                coords: [34.052235, -118.243683],
                name: "Los Angeles"
            }, {
                coords: [41.878113, -87.629799],
                name: "Chicago"
            }, {
                coords: [51.507351, -0.127758],
                name: "London"
            }, {
                coords: [40.416775, -3.703790],
                name: "Madrid "
            }];
            var map = new jsVectorMap({
                map: "world",
                selector: "#world_map",
                zoomButtons: true,
                markers: markers,
                markerStyle: {
                    initial: {
                        r: 9,
                        strokeWidth: 7,
                        stokeOpacity: .4,
                        fill: window.theme.primary
                    },
                    hover: {
                        fill: window.theme.primary,
                        stroke: window.theme.primary
                    }
                },
                zoomOnScroll: false
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>
<script> // Script for pop up form
 function togglePopup() {
 document.getElementById("popup-1")
  .classList.toggle("active");
}
</script>





</body>

</html>