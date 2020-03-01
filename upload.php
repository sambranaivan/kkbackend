<?php
error_reporting("E_ALL");
  $name = $_FILES['file']['name'];
  $temp = $_FILES['file']['tmp_name'];

  if(move_uploaded_file($temp,"uploads/".$name)){
   echo "Your file was uploaded";
}
 else
{ 
 echo "Your file cound't upload";
}

?>