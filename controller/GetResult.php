<?php
include '../database/connection.php';



function gpa($matric, $level, $semester, $session, $department_id)
{
    global $dbconnect;
    $total_credit_unit = 0;
    $total_grade_point = 0;

    $result = "SELECT * FROM results INNER JOIN courses ON courses.id = results.course_id WHERE matric = '$matric' AND department_id = '$department_id' 
    AND level = '$level' AND semester = '$semester' AND session = '$session'";
    $get_result = mysqli_query($dbconnect, $result);
    while ($row_result = mysqli_fetch_array($get_result)) {
        $course_unit = $row_result['course_unit'];
        $ca_score = $row_result['ca_score'];
        $exam_score = $row_result['exam_score'];
        $total_score = $row_result['total_score'];

        if ($total_score >= 70) {
            $grade_point = 5;
            $remark = 'A';
        } elseif ($total_score >= 60) {
            $grade_point = 4;
            $remark = 'B';
        } elseif ($total_score >= 50) {
            $grade_point = 3;
            $remark = 'C';
        } elseif ($total_score >= 45) {
            $grade_point = 2;
            $remark = 'D';
        } elseif ($total_score >= 40) {
            $grade_point = 1;
            $remark = 'E';
        } else {
            $grade_point = 0;
            $remark = 'F';
        }

        $weighted_grade_point = $course_unit * $grade_point;
        $total_grade_point += $weighted_grade_point;

        // Add course unit to total credit hour
        $total_credit_unit += $course_unit;
    }

    if ($total_credit_unit > 0) {
        return $gpa = $total_grade_point / $total_credit_unit;
    } else {
        return $gpa = 0;
    }

}


function cgpa($matric, $department_id)
{
    global $dbconnect;
    $total_credit_unit = 0;
    $total_grade_point = 0;

    $result = "SELECT * FROM results INNER JOIN courses ON courses.id = results.course_id WHERE matric = '$matric' AND department_id = '$department_id'";
    $get_result = mysqli_query($dbconnect, $result);
    while ($row_result = mysqli_fetch_array($get_result)) {
        $course_unit = $row_result['course_unit'];
        $ca_score = $row_result['ca_score'];
        $exam_score = $row_result['exam_score'];
        $total_score = $row_result['total_score'];

        if ($total_score >= 70) {
            $grade_point = 5;
            $remark = 'A';
        } elseif ($total_score >= 60) {
            $grade_point = 4;
            $remark = 'B';
        } elseif ($total_score >= 50) {
            $grade_point = 3;
            $remark = 'C';
        } elseif ($total_score >= 45) {
            $grade_point = 2;
            $remark = 'D';
        } elseif ($total_score >= 40) {
            $grade_point = 1;
            $remark = 'E';
        } else {
            $grade_point = 0;
            $remark = 'F';
        }

        $weighted_grade_point = $course_unit * $grade_point;
        $total_grade_point += $weighted_grade_point;

        // Add course unit to total credit hour
        $total_credit_unit += $course_unit;
    }

    if ($total_credit_unit > 0) {
        return $gpa = $total_grade_point / $total_credit_unit;
    } else {
        return $gpa = 0;
    }

}

function course_details($matric, $level, $semester, $session, $department_id)
{
    global $dbconnect;

    $result = "SELECT * FROM results INNER JOIN courses ON courses.id = results.course_id WHERE matric = '$matric' AND department_id = '$department_id'";
    $get_result = mysqli_query($dbconnect, $result);
    while ($row_result = mysqli_fetch_array($get_result)) {
        $course_code[] = $row_result['course_code'];
        $course_unit[] = $row_result['course_unit'];
        $ca_score[]= $row_result['ca_score'];
        $exam_score[] = $row_result['exam_score'];
    }
    $detail['course_code'] = $course_code;
    $detail['course_unit'] = $course_unit;
    $detail['ca_score'] = $ca_score;
    $detail['exam_score'] = $exam_score;
    
    return $detail;

}

