<?php
require "../vendor/autoload.php";

use Phpoffice\PhpSpreadsheet\Spreadsheet;
use Phpoffice\PhpSpreadsheet\Writer\Xlsx;

include '../database/connection.php';

if (isset($_POST['upload_result'])) {
    $course_id = mysqli_real_escape_string($dbconnect, $_POST['course_id']);
    $semester = mysqli_real_escape_string($dbconnect, $_POST['semester']);
    $level = mysqli_real_escape_string($dbconnect, $_POST['level']);
    $session = mysqli_real_escape_string($dbconnect, $_POST['session']);
    $department_id = mysqli_real_escape_string($dbconnect, $_POST['department_id']);

    $file = $_FILES['result_file']['name'];
    $file_loc = $_FILES['result_file']['tmp_name'];
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_loc);
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    foreach ($sheetData as $data) {
        $matric_number[] = $data[0];
        $ca[] = $data[1];
        $exam[] = $data[2];
    }

    for ($i = 1; $i < count($matric_number); $i++) {
        $total_score = intval($ca[$i]) + intval($exam[$i]);
        $matric = $matric_number[$i];
        $ca_score = intval($ca[$i]);
        $exam_score = intval($exam[$i]);

        // check if result already exist

        $check_exist = "SELECT * FROM results WHERE matric = '$matric' AND course_id = '$course_id' AND semester = '$semester' AND level = '$level' AND session = '$session'";
        $query_check_exist = mysqli_query($dbconnect,  $check_exist);
        $is_result_exist = mysqli_num_rows($query_check_exist);
        
        if($is_result_exist > 0) {
            $updated_at = date("Y-m-d h:i:s");
            $update_result = "UPDATE results SET ca_score = '$ca_score', exam_score = '$exam_score', total_score = '$total_score', updated_at ='$updated_at' WHERE matric = '$matric' AND course_id = '$course_id' AND semester = '$semester' AND level = '$level' AND session = '$session'";
            $query_update_result =  mysqli_query($dbconnect, $update_result);

        }else{
            $store_result =  "INSERT INTO results (matric, course_id, ca_score, exam_score, total_score, semester, level, session) VALUES 
            ('$matric', '$course_id', '$ca_score', '$exam_score', '$total_score', '$semester', '$level', '$session')";
    
            $query_store_result = mysqli_query($dbconnect, $store_result);
        }

       
    }
    if ($query_store_result or $query_update_result) {
        header('Location: ../result-upload.php?msg=Result successfully upload&type=success');
    } else {
        echo 'error occur uploading result';
        header('Location: ../result-upload.php?msg="Error during uploading of result !&type=error"');
    }
}
