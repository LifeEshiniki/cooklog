<html>
<head>
<title>
投稿一覧
</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<body>
<h1>Cooklogの投稿一覧</h1>
<table border = "1">
<tr><td>投稿年</td><td>投稿日時</td><td>料理名</td><td>投稿者</td></tr>
<?php
   $host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
  die("MySQL接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM raunch";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)){
  print("<tr>");
  print("<td>".$row["year"]."</td>");
  print("<td>".$row["datetime"]."</td>");
  print("<td>".$row["meal_id"]."</td>");
  print("<td>".$row["user_id"]."</td>");
  print("</tr>\n");
}
mysqli_free_result($res);

?>
</table>
</body>
</html>