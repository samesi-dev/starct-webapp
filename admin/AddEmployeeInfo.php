<?php
session_start();
require_once "config.php";

$message='';

if(isset($_POST['insert']))
{ 
    
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
    $employee_cnic = $_POST['employee_cnic'];
    $employee_father = $_POST['employee_father'];

    $age = $_POST['age'];
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
 

    
   
        $query = "INSERT INTO tbl_employeedata (name,Job_name,Job_description,hiring_date,employement_years,total_hours,leaves_allowed,account_no,salary,bonus,growth,remarks,phonenumber1,phonenumber2,employee_email,employee_father,employee_cnic,age,address,city,country,gender,marital_status,previous_org,prev_job,prev_start_date,prev_end_date,degree_name,passing_year,institute_name)
         VALUES ('$name','$Job_name','$Job_description','$hiring_date','$employement_years','$total_hours','$leaves_allowed','$account_no','$salary','$bonus','$growth','$remarks','$phonenumber1','$phonenumber2','$employee_email','$employee_father','$employee_cnic','$age','$address','$city','$country','$gender','$marital_status','$previous_org','$prev_job','$prev_start_date','$prev_end_date','$degree_name','$passing_year','$institute_name')";
                $query_run = mysqli_query($conn, $query);
             if ($query_run)
              {
             // echo "Saved";
        
             $_SESSION['status'] = "Successfully Inserted";
             $_SESSION['status_code'] = "success";
             header("location: employee.php");
            }
        
             else 
            {
            $_SESSION['status2'] = "Not Inserted!";
            $_SESSION['status_code'] = "error";
          
            }
    }

    
  
    
  




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
input{
    padding:7px
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
                <h1 class="h3 d-inline align-middle">Add Employee Details</h1>
            
            </div>
            <div class="row">
  

            <div class="col-md-8 col-xl-10">
                <div class="card">
                <div class="card-header">

                        <h5 class="card-title mb-0">Current Info</h5>
                        
                        </div>
                    <div class="content">
                        <form method="post" action="">
                        <div >
                    
                              
                     
                        <p> <input type="text" placeholder="Employee Name..."  name="name" required></p>   
                        <p>  <input type="text" placeholder="Job Name..."  name="Job_name" required></p>      
                          <p><input  type="text" placeholder="Job Description..." name="Job_description" required></p>  
                          <p >  <input type="date" placeholder="Hiring Date..." name="hiring_date" required></p>      
                          <p ><input type="number" placeholder="Employement Years..."  name="employement_years" required></p>    
                          <p style="float: left; width:40%">   <input type="number" placeholder="Total Hours..."  name="total_hours" required></p>   
                          <p style="float: right;width:40%">     <input type="number" placeholder="Leaves Allowed..." name="leaves_allowed" required></p>
                          <p style="float: left; width:40%"> <input placeholder="Account No..."  name="account_no" required></p>
                          <p style="float: right; width:40%">   <input  type="number" placeholder="Salary..."name="salary" required></p>  
                          <p  style="float:left;width:40%"><input  type="number"  placeholder="Bonus..."name="bonus" required></p>  
                          <p style="float: right;width:40%" >  <input placeholder="Growth..." name="growth" required></p>  
                          <p style=" float:left">   <textarea  placeholder="Remarks " name="remarks" rows="2" cols="23"></textarea></p>
          
                          </div>
                          </div>
                          <hr>
        
                          <div class="card-header">

                        <h5 class="card-title mb-0">Personal Info</h5>
        
                        </div>
                        <div class="content">
                  
                        <div >
                       
                                <p > <input type="text" placeholder="Employee Father's Name..." name="employee_father" required></p>   
                                <p >  <input type="text" placeholder="Employee's age" name="age" required></p> 
                                <p >  <input type="text" placeholder="Employee CNIC No." name="employee_cnic" required></p>      
                                <p><input  type="text" placeholder="Employee's Address " name="address" required></p>  
                                <p >  <input type="text" placeholder="Employee's city" name="city" required></p>  
                                <p >  <input type="text" placeholder="Employee's country"  name="country" required></p>  
                                <p > <select placeholder="Gender" name="gender" required>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                    </select></p>   
                                <p > <select placeholder="Marital Status" name="marital_status" required>
                                                                <option value="single">Single</option>
                                                                <option value="married">Married</option>
                                                                    </select></p>                                     
                                

                        </div>
                        </div>
                        <hr>

                        <div class="card-header">

                        <h5 class="card-title mb-0">Contact Info</h5>
                        </div>
                        <div class="content">
                 
                        <div style="width: 50%;">

                   
                        <p >  <input type="tel" placeholder="Employee Phone Number 1" name="phonenumber1"required></p>      
                        <p><input  type="tel" placeholder="Phone number 2" name="phonenumber2"></p>  
                        <p >  <input type="email" placeholder="Employee email" name="employee_email" required></p>                                   
                                    

                        </div>
                        </div>
             
                        <hr>
                
                        <div class="card-header">

                        <h5 class="card-title mb-0">Qualification</h5>
                        
                        </div>
                        <div class="content">
                  
                        <div style="width: 50%;">

                                <p><input type="text" placeholder="Degree Name"  name="degree_name" required></p>
                                <p><input type="year" placeholder="Graduation Year" name="passing_year" required></p>
                                <p><input type="text" placeholder="Institute Name"  name="institute_name" required></p>
                                    
                                    

                        </div>
                        </div>
            
                        <hr>
                         <div class="card-header">

                        <h5 class="card-title mb-0">Previous Experience</h5>
                        
                        </div>
                        <div class="content">
                 
                        <div style="width: 50%;">

                            <p><input type="text" placeholder="Previous Organization Name"  name="previous_org"></p>
                            <p><input type="text" placeholder="Previous Job Name" name="prev_job"></p>
                            <p><input type="date" placeholder="Previous Job Start Date"  name="prev_start_date"></p>
                            <p><input type="date" placeholder="Previous Job End Date" name="prev_end_date"></p>
                        </div>                             
                        <a><button name="insert" style="margin-left:85%" class="btn btn-primary"><i class="align-middle" data-feather="plus-square"></i> <span>Submit</button></a>  </span>      

                        </div>
                        </div>
                        </form>

                


                  
                    
                     

                         
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



</body>

</html>