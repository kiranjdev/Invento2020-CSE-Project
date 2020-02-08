<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/db_connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/student/assets/css/style.css">
    <title>Dashboard | Students</title>
  </head>
  <body>
    <div class="headernav">
      <div class="container">
        <div class="row">
          <div class="col-3 title"><h5>Lab</h5></div>
          <div class="col-9 hello">Welcome, $user</div>
        </div>
      </div>
    </div>
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
                <a href="#" class="pending-exp">5. Implementation of 2 pass assembler</a><br>
                <a href="#" class="pending-exp">5. Implementation of 2 pass assembler</a>
              </div>
          </div>
          <div class="row py-4">
              <div class="col sub-page-title">
                <h5>Completed Experiments</h5>
                <a href="#" class="completed-exp">5. Implementation of 2 pass assembler</a><br>
                <a href="#" class="completed-exp">5. Implementation of 2 pass assembler</a>
              </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
