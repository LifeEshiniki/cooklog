<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<body>
<h1></h1>
<table>
<tr><td></td><td></td></tr>
<?php
   $host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
  die("MySQL接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM users";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)){
  print("<tr>");
  print("<td>".$row["name"]."</td>");
  print("<td>".$row["id"]."</td>");
  print("</tr>\n");
}
mysqli_free_result($res);

?>
</table>
</body>
</html>