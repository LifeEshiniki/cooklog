<html>
<head>

<title>
材料一覧
</title>

<link rel="stylesheet" type="text/css" href="style.css" media="all">

</head>
 
<body>
<h1>Cooklogの材料一覧</h1>
<table border = "1">
<tr><td>食材名</td><td>使用料理</td><td>量</td><td>単位</td></tr>
<?php
   $host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
  die("MySQL接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");
$sql = "SELECT * FROM shokuzai";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)){
  print("<tr>");
  print("<td>".$row["id"]."</td>");
  print("<td>".$row["zairyou"]."</td>");
  print("<td>".$row["ryou"]."</td>");
  print("<td>".$row["unit"]."</td>");
  print("</tr>\n");
}
mysqli_free_result($res);

?>
</table>
</body>
</html>