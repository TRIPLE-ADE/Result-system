<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
</head>
<body>
    <form action="controller/UploadResult.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="course_id" value="1">
        <input type="hidden" name="semester" value="1">
        <input type="hidden" name="level" value="100">
        <input type="hidden" name="session" value="2022/2023">
        <input type="file" name="result_file">

        <button type="submit" name="upload_result">Upload</button>
    </form>
</body>
</html>