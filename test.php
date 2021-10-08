<html>
<body>
<div id="wrapper">
 <form method="post" action="import_file.php" enctype="multipart/form-data">
  <input type="file" name="file"/>
  <input type="submit" name="submit_file" value="Submit"/>
 </form>
</div>
</body>
</html>

<?php
if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $name = $csv[0];
  $age = $csv[1];
  $country = $csv[2];
  mysql_query("INSERT INTO employee VALUES ('$name','$age','country')");
 }
}
?>