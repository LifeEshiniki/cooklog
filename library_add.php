<html>
<head><title>データの追加</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
<?php
$id = $_POST['id'];
$name = $_POST['name'];
$difficulty = $_POST['difficulty'];
$cook = $_POST['howtocook'];
if ($id == ""){
    exit ("IDが入力されていません");
}

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
    die("データベース接続エラー.<br />");
}

mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");
    
$sql = "INSERT INTO meal(id,name,difficulty,how_to_cook) VALUES('$id','$name','$difficulty','$cook')";

mysqli_query($conn, $sql)
   or die("登録できませんでした");
print("登録しました。<a href=\"search_form.html\">search_form.html</a>で確認してください。");
?>
</body>
</html>
