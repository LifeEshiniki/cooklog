<html>
<head><title>配列データの取得</title></head>
<body>
<h1>
料理一覧
</h1>
<table border="1">
<tr><td>id</td><td>file</td></tr>
<?php
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
    die("MySQL接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8"); //utf8コードの利用にはこれが必要
$sql = "SELECT * FROM meal";
$res = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["id"]."</td>");
    print("<td>".$row["name"]."</td>");
    print("<td><img src=\"".$row["image"]."\"/></td>");
    print("</tr>\n");
}
mysqli_free_result($res);
?>
</table>
</body>
</html>
