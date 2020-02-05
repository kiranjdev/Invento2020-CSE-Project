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
    <div class="container py-4">
      <div class="row py-4">
        <div class="col hello"><h3>Hello, $user!</h3></div>
      </div>
      <div class="row py-4">
        <div class="col-3 sidenav pr-5">
          <a href="" class="text-decoration-none navbutton"><div>Dashboard</div></a>
          <a href="" class="text-decoration-none navlink">Logout</a>
        </div>
        <div class="col customcontent">
          <div class="row">
            <div class="col"><a href="" class="text-decoration-none labbutton"><div>Network Programming Lab</div></a></div>
            <div class="col"><a href="" class="text-decoration-none labbutton"><div>System Software Lab</div></a></div>
          </div>
          <div class="row prevlabslink py-4">
            <a href="">View previous labs</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="py-3 customfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p class="m-0 text-secondary">:D</p></div>
    </div>
  </div>
</footer>

  </body>
</html>
