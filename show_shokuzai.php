<html>
<head><title>検索結果</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
<?php
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
    die("データベース接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");

$mid = mysqli_escape_string($conn, $_GET["mid"]);
$mid = str_replace("%", "\%", $mid);

$condition = "WHERE id = ".$mid;

$sql = "SELECT * FROM shokuzai ".$condition."";
$res = mysqli_query($conn , $sql);
print("<h1>食材一覧</h1>");
print("<table border=\"1\">");
print("<tr><td>材料名</td><td>量</td><td>単位</td></tr>");
while($row = mysqli_fetch_array($res)) {
  print("<tr>");
  print("<td>".$row["zairyou"]."</td>");
  print("<td>".$row["ryou"]."</td>");
  print("<td>".$row["unit"]."</td>");
  print("</tr>");
}
print("</table>");
print("<a href= \"update_shokuzai.php?mid=".$row["id"]."\">食材を編集する</a>");  
mysqli_free_result($res);


?>
<br>
<a href ="index.html">TOP</a>

</body>
</html>
