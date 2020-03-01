<?php
error_reporting(E_ALL);
  $name = $_FILES['file']['name'];
  $temp = $_FILES['file']['tmp_name'];

  if(move_uploaded_file($temp,"uploads/".$name)){
   echo "Your file was uploaded";
   echo exec('ffmpeg -i "uploads/video.mp4" -i "uploads/arrebol.mp4" -filter_complex "[0:v]scale=480:640,setsar=1[l];[1:v]scale=480:640,setsar=1[r];[l][r]hstack;[0][1]amix"  new.mp4');
}
 else
{ 
 echo "Your file cound't upload";
}

?>