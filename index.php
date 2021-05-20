<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      img{
        width: 20%;
        height: 20%;
        margin: 10px;
        box-shadow: 2px 2px 2px 2px #dfdfdf;
        border-radius: 8%;
      }

      form{
        background-color: #dfdfdf;
        padding: 10px;
      }

      .filess{
        background-color: white;
        margin-left: 10px;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <form enctype="multipart/form-data" action="22_imageuploader_process.php" method="POST">
   <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
   <input name="userfile" type="file" class="filess" />
   <input type="submit" value="upload" />
   </form>


   <?php
     $dir = './img/';
     $file1 = scandir($dir);
     # print_r($file1); Array 확인

     $imglist = array();   #배열 선언
     $a = 2;
     while ($a < count($file1)) {
       array_push($imglist, $file1[$a]);
       #echo $file1[$a]."<br>";
       $a = $a + 1;
     }

     #echo var_dump($imglist);

    $b = 2;
    if ($imglist) {
      while ($b < count($file1)){
    echo  "<img src=\"./img/$file1[$b]\">";
    $b = $b + 1;
    }
  };


    ?>
  </body>

  </script>
</html>
