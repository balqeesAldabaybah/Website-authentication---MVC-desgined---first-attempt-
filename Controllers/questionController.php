<?php
include '../Models/questionModel.php';
include 'db_connection.php';

function getAll()
{
    session_start();
    if(!$_SESSION['userid']){
        header('location:login.html');
        exit();
    }
    $conn = openConn();
    $result = mysqli_query($conn, "select * from questions ");
    closeConn($conn);
    $arr_out = array();
    while ($r = mysqli_fetch_assoc($result)) {
        $ques = new Question(
                            $r['ID'],
                            $r['question'],
                            $r['No_Options'],
                            $r['Option1'],
                            $r['Option2'],
                            $r['Option3'],
                            $r['Option4'],
                            $r['No_CorrectAnswer']);
                           
        $arr_out[] = ( $ques->getQuestion()) ;
    }
    echo json_encode ($arr_out)  ;
}

getAll();