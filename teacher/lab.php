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
    <link rel="stylesheet" href="/teacher/assets/css/style.css">
    <title>Dashboard | Teacher</title>
  </head>
  <body>
    <div class="container py-4">
      <div class="row py-4">
        <div class="col-3 hello"><h3>Hello, $user!</h3></div>
        <div class="col-9 lab-title"><h3>Network Programming Lab</h3></div>
      </div>
      <div class="row py-4">
        <div class="col-3 sidenav pr-5">
          <a href="" class="text-decoration-none navbutton"><div>Dashboard</div></a>
          <a href="" class="text-decoration-none navlink">Logout</a>
        </div>
        <div class="col customcontent">
          <div class="row">
            <div class="col">
            <form class="form-inline">
                  <div class="form-group">
                    <input type="password" class="form-control" id="experiment" placeholder="Experiment">
                  </div>
                  <button type="submit" class="btn btn-primary">Add new experiment</button>
            </form>
            </div>
          </div>
          <div class="row">
            <div class="col"><a href="" class="text-decoration-none labbutton"><div>Network Programming Lab<p>S2</p></div></a></div>
            <div class="col"><a href="" class="text-decoration-none labbutton"><div>System Software Lab<p>S4</p></div></a></div>
          </div>
          <div class="row">
            <div class="col"><a href="" class="text-decoration-none labbutton"><div>Network Programming Lab<p>S6</p></div></a></div>
            <div class="col"><a href="" class="text-decoration-none labbutton"><div>System Software Lab<p>S8</p></div></a></div>
          </div>
          <div class="row py-4">
            <div class="col newlablink ">
            <a href="">+New lab</a>
            </div>
            <div class="col prevlabslink ">
            <a href="">View past labs</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
