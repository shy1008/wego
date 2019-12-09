<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>download file</h2>
    <a href="WegoGames/wego.exe">click</a>
</body>
</html>


<?php
if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = 'WegoGames/' . $filename;
    if(!empty($filename) && file_exists($filepath)){
        header("Cache-Control:public");
        header("Content-Description:FIle Transfer");
        header("Content-Disposition: attachement; filename=$filename"); 
        header("Content-Type:application/zip");
        header("Content-Transfer-Emcoding:binary");

        readfile($filepath);
        exit;
    }
    else{
        echo "this file does nnot exist.";
    }
  
}

?>
<!-- // 보안취약 
// if(strstr($filename,"../")||strstr($filename,"..\\"))
// {
//     echo "<script>alert('Access Denied!!')</script>";
// } -->