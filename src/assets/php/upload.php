
<?php
$path = "profile_pictures";
$filename = "1";
$imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
$target_dir = "../../assets/uploads/" . $path . "/";
$target_file = $target_dir .$filename.".".$imageFileType;
$uploadOk = 1;
$file_type=$_FILES['image']['type'];
$extensions = array("jpeg", "jpg", "png");
// $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

//checking if file exsists
foreach ($extensions as $ext) {
  if (file_exists($target_dir .$filename.".".$ext)) {
    unlink($target_dir .$filename.".".$ext);
  }
}


// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo $imageFileType;
  echo "Sorry, only JPG, JPEG & PNG files are allowed.";
  $uploadOk = 0;
}



// if (in_array($file_ext, $extensions) === false) {
//   echo "extension not allowed, please choose a JPEG or PNG file.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

