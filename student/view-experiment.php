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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../student/assets/css/style.css">
    <title>View Experiment</title>
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
          <a class="nav-item nav-link" href=""><i class="material-icons">account_circle</i></a>
        </div>
        <div class="navbar-nav ml-auto phone_menu">
          <a class="nav-item nav-link" href=""><b>Dashboard</b></a>
          <a class="nav-item nav-link" href=""><b>Profile</b></a>
          <a class="nav-item nav-link" href="/logout.php"><b>Logout</b></a>
        </div>
      </div>
    </div>
  </nav>

    <div class="container py-4  maincontent">
      <div class="row py-4">
        <div class="col-3 sidenav pr-5">
          <a href="" class="text-decoration-none navbutton"><div>Dashboard</div></a>
          <a href="" class="text-decoration-none navlink">Logout</a>
        </div>
        <div class="col customcontent">
          <div class="row mb-4">
              <div class="col page-title">
                <a href="" class="btn btn-primary btn-circle"><i class="material-icons">edit</i></a>
                <h5>Experiment 5</h5>
                <h3>Implementation of Two Pass Assembler in C</h3>

              </div>
          </div>
          <div class="row py-4">
              <div class="col sub-page-title">
                <h4>Code</h4><br>
                <label for="code1">twopass.c</label>
                <textarea class="form-control" id="code1" rows="20" readonly style="resize: none;">
                  void PASS2()
                  {
                    FILE *inter,*output;
                    char record[30],part[6],value[5];
                    int currtxtlen=0,foundopcode,foundoperand,chk,operandaddr,recaddr=0;
                    inter=fopen("inter.txt","r");
                    output=fopen("output.txt","w");
                    fgets(line,20,inter);
                    FILE *inter,*output;
                    char record[30],part[6],value[5];
                    int currtxtlen=0,foundopcode,foundoperand,chk,operandaddr,recaddr=0;
                    inter=fopen("inter.txt","r");
                    output=fopen("output.txt","w");
                    fgets(line,20,inter);
                    FILE *inter,*output;
                    char record[30],part[6],value[5];
                    int currtxtlen=0,foundopcode,foundoperand,chk,operandaddr,recaddr=0;
                    inter=fopen("inter.txt","r");
                    output=fopen("output.txt","w");
                    fgets(line,20,inter);
                    FILE *inter,*output;
                    char record[30],part[6],value[5];
                    int currtxtlen=0,foundopcode,foundoperand,chk,operandaddr,recaddr=0;
                    inter=fopen("inter.txt","r");
                    output=fopen("output.txt","w");
                    fgets(line,20,inter);
                    FILE *inter,*output;
                    char record[30],part[6],value[5];
                    int currtxtlen=0,foundopcode,foundoperand,chk,operandaddr,recaddr=0;
                    inter=fopen("inter.txt","r");
                    output=fopen("output.txt","w");
                    fgets(line,20,inter);
                  }
                </textarea>
                <br><br><br>
                <h4>Output</h4><br>
                <label for="output1">twopass.png</label>
                <img id="output1" class="outputimg" src="https://i.ytimg.com/vi/wIuZajISL-E/maxresdefault.jpg">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
