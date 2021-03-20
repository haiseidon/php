<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form upload file PHP</title>
</head>
<body>
    <form action="form_upload.php" method="post" enctype="multipart/form-data">
        <h2>Select a file to upload</h2>
        <label for="fileSelect"></label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p>Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed</p>
    </form>
</body>
</html>