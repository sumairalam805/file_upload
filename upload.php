<?php

//upload.php

$file = '';

if(isset($_FILES['file']['name']))
{
 $file_name = $_FILES['file']['name'];
 $valid_extensions = array("csv","xlsx","pdf","docx","doc","txt","mp3","mp4");
 $extension = pathinfo($file_name, PATHINFO_EXTENSION);
 if(in_array($extension, $valid_extensions))
 {
  if($extension=='csv' || $extension=='xlsx'){
    $upload_path = 'upload/stucture/' . time() . '.' . $extension;  
  }
  if($extension=='pdf' || $extension=='docx' || $extension=='doc'|| $extension=='txt'){
    $upload_path = 'upload/document/' . time() . '.' . $extension;  
  }
  if($extension=='mp3'){
    $upload_path = 'upload/audio/' . time() . '.' . $extension;  
  }
  if($extension=='mp4' || $extension=='mov'){
    $upload_path = 'upload/video/' . time() . '.' . $extension;  
  }
  
  if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_path))
  {
   $message = 'File Uploaded';
   $file = $upload_path;
  }
  else
  {
   $message = 'There is an error while uploading file.';
  }
 }
 else
 {
  $message = 'Only .pdf files are allowed to upload.';
 }
}
else
{
 $message = 'Select a file first.';
}

$output = array(
 'message'  => $message,
 'file'   => $file
);

echo json_encode($output);


?>
