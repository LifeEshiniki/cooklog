<html>
<head><title>データの削除</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">

</head>
<body>
<?php
$id = $_GET['bid'];

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
    die("データベース接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");

$sql = "DELETE FROM meal WHERE id='$id'";
mysqli_query($conn, $sql)
    or die("削除できませんでした");
print("削除しました。<a href=\"search_form.html\">search_form.html</a>で確認してください。");
?>
</body>
</html>
