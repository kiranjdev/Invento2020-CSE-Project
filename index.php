<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/student/register' :
        require __DIR__ . '/views/student_register.php';
        break;
    case '/teacher/register' :
        require __DIR__ . '/views/teacher_register.php';
        break;
    case '/student' :
        require __DIR__ . '/views/student_index.php';
        break;
    case '/teacher' :
        require __DIR__ . '/views/teacher_index.php';
        break;
    case '/student/submit' :
        require __DIR__ . '/views/submit_code.php';
        break;
    case '/student/view' :
        require __DIR__ . '/views/view_code.php';
        break;
    case '/student/edit' :
        require __DIR__ . '/views/edit_code.php';
        break;
    case '/teacher/pending' :
        require __DIR__ . '/views/pending_experiments.php';
        break;
    case '/teacher/check' :
        require __DIR__ . '/views/check_experiment.php';
        break;
    case '/teacher/new_lab' :
        require __DIR__ . '/views/new_lab.php';
        break;
    case '/teacher/new_experiment' :
        require __DIR__ . '/views/new_experiment.php';
        break;
    case '/teacher/report' :
        require __DIR__ . '/views/report.php';
        break;
    case '/logout' :
        require __DIR__ . '/views/logout.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>
