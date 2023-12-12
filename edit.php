<?php

require_once "config.php";

$id=mysqli_real_escape_string($conn, $_POST['id']);
$name=mysqli_real_escape_string($conn, $_POST['name']);
$description=mysqli_real_escape_string($conn, $_POST['description']);
$price=mysqli_real_escape_string($conn, $_POST['price']);

$sql = "UPDATE menu SET name='$name', description='$description', price='$price' WHERE menu_id='$id'";

if ( $_FILES['userfile']['error']==1)
echo 'size';

else if ($conn->query($sql) === TRUE)
{

if($_FILES['userfile']['error']==4)
{

echo 'true';

}
else
{
unlink('assets\img\menu/'.$id.'.png');
$uploaddir =  __DIR__ .'\assets\img\menu/';
$imageFileType = strtolower(pathinfo($_FILES['userfile']['name'],PATHINFO_EXTENSION));
$uploadfile = $uploaddir . $id . '.png';

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "true";
} else {
   echo "false_image";
}

}
}
else
echo "false";
?> 