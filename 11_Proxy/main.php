<?php
namespace Proxy;

include 'include.php';

$main_teacher = new MainTeacher('高橋');
$main_teacher->question1();
$main_teacher->question2();
$main_teacher->question3();

$sub_teacher = new SubTeacher('田中', $main_teacher);
$sub_teacher->question1();
$sub_teacher->question2();
$sub_teacher->question3();