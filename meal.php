<html>
<head>
<title>
料理一覧
</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<body>
<h1>Cooklogの料理一覧</h1>
<table border = "1">
<tr><td>料理名</td><td>難易度</td><td>つくりかた</td></tr>
<?php
   $host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
  die("MySQL接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM meal";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)){
  print("<tr>");
  print("<td>".$row["name"]."</td>");
  print("<td>".$row["difficulty"]."</td>");
  print("</tr>\n");
  print("<tr>");
  print("<td><img src=\"".$row["image"]."\"/></td>");
  print("</tr>\n");
}
mysqli_free_result($res);

?>
</table>
</body>
</html>