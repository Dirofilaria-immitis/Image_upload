<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<?php
#ini_set("display_errors", "1");

#$uploaddir = 'C:\Bitnami\wampstack-8.0.3-2\apache2\htdocs\img\\';
#$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

#var_dump($_FILES);

#echo '<pre>';
#if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
#    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
#} else {
#    print "파일 업로드 공격의 가능성이 있습니다!\n";
#}
#echo '자세한 디버깅 정보입니다:';
#print_r($_FILES);
#print "</pre>";
#?>

<?php
ini_set("display_errors", "1");

$uploaddir = 'C:\Bitnami\wampstack-8.0.3-2\apache2\htdocs\img\\';
$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

var_dump($_FILES);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  print "성공!\n";
  header('Location: /index.php');
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
};
?>
















</body>
</html>
