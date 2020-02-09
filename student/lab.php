<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/db_connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/student/assets/css/style.css">
    <title>Dashboard | Students</title>
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-lg customnav">
    <div class="container">
      <a class="navbar-brand" href="">
        Hehe
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="navbar-nav ml-auto desktop_menu">
          <a class="nav-item nav-link" href=""><b>Profile</b></a>
        </div>
        <div class="navbar-nav ml-auto phone_menu">
          <a class="nav-item nav-link" href=""><b>Dashboard</b></a>
          <a class="nav-item nav-link" href=""><b>Profile</b></a>
          <a class="nav-item nav-link" href="/logout.php"><b>Logout</b></a>
        </div>
      </div>
    </div>
  </nav>

    <div class="container py-4">
      <div class="row py-4">
        <div class="col-3 sidenav pr-5">
          <a href="" class="text-decoration-none navbutton"><div>Dashboard</div></a>
          <a href="" class="text-decoration-none navlink">Logout</a>
        </div>
        <div class="col customcontent">
          <div class="row mb-4">
              <div class="col page-title"><h3>Network Programming Lab</h3></div>
          </div>
          <div class="row py-4">
              <div class="col sub-page-title">
                <h5>Pending Experiments</h5>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action list-group-item-danger lst">1. Implementation of two pass assembler</a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-danger lst">2. Implementation of readers writer problem</a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-danger lst">3. Implementation of bankers algorithm</a>
               </div>
              </div>
          </div>
          <div class="row py-4">
              <div class="col sub-page-title">
                <h5>Completed Experiments</h5>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action list-group-item-success lst">1. Implimentation of different paging techniques</a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-success lst">2. Simulate disk scheduling algortithms (FCFS,SCAN,C-SCAN)</a>
                  <a href="#" class="list-group-item list-group-item-action list-group-item-success lst">3. Simulate working of dining-philosopher's problem</a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="myfooter">
      <div class="container">
         <span class="text-muted">:D</span>
      </div>
    </footer>

  </body>
</html>
