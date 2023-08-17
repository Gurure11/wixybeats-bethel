<?php
$FileName=$_Files=$_Files{['fuResume']['name'];

$TmpFile=$_Files['fuResume']['tmp_name'];

move_uploaded_file($TmpName,$FileName);

echo(File Uploaded Successfully);
?>