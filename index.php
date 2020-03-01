<!DOCTYPE html>
<html>
<body>
<?php

echo exec('whoami');
?>
<form action="upload.php" method ="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input type="submit" value="submit" name="submit"/>
</form>
</body>
</html>