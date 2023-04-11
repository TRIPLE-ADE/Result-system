<?php

function course()
{
    global $dbconnect;
    $courses = array();
    $course_query = "SELECT * FROM courses";
    $query_course_table = mysqli_query($dbconnect, $course_query);
    while ($query_course_table_output = mysqli_fetch_array($query_course_table)) {
        $course['id'] = $query_course_table_output['id'];
        $course['course_title'] = $query_course_table_output['course_title'];
        $course['course_code'] = $query_course_table_output['course_code'];
        $course['course_unit'] = $query_course_table_output['course_unit'];

        $courses[] = $course;
    }

    return $courses;
}

function departments()
{
    global $dbconnect;
    $departments = array();
    $department_query = "SELECT * FROM departments";
    $query_department_table = mysqli_query($dbconnect, $department_query);
    while ($query_department_table_output = mysqli_fetch_array($query_department_table)) {
        $department['id'] = $query_department_table_output['id'];
        $department['department_name'] = $query_department_table_output['department_name'];
        $departments[] = $department;
    }

    return $departments;
}
