
<?php
if(isset($_SESSION['username']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <style>
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   
  

    <fieldset align = "right">

       <h1 align="left"><img src="../CSS/logo.png"><b> Projec<span style="color:green">Tree</span>.com</b></h1>

       <div class="topnav">
        <a href='dashboard_volunteer_view.php'>Dashboard</a>
        <a href='volunteer_view_profile.php'>View Profile</a>
        <a href='edit_volunteer_view.php'>Edit Profile</a>
        <a href='change_pass_view.php'>Change Password</a>
        <a href ='fund.php'>Ask for fund </a>
        <a href ='fundHistory.php'>Fund history </a>
        <a href ='add_plant.php'>Add trees and stocks </a>
        <a href ='nursery_details.php'>Nursery details </a>
        <a href ='show_all_treeAjax.php'>Show all tree collection </a>
        <a href ='page.php'>Search and check other volunteers </a>
        <a href ='quick_search.php'>Search and check users </a>
        <a href ='send_msz.php'>Send message to Admin </a>
         <a href ='../controller/logout_volunteer_controller.php'>Logout </a>
       </div>




     </fieldset>

  </body>
</html>
<?php
}
else {
header("location:../view/login_volunteer_view.php");
}
?>