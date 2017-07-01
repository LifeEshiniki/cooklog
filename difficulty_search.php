<html>
<head><title>検索結果</title></head>
<body>
<?php
$host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
    die("データベース接続エラー.<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");

$condition = "";

if(isset($_POST["difficulty"]) && ($_POST["difficulty"] != "")){
    $dif = mysqli_escape_string($conn, $_POST["difficulty"]);
   $dif = str_replace("%", "\%", $dif);
    if ($condition == ""){
        $condition = "WHERE difficulty LIKE \"%".$dif."%\"";
    } else{
        $condition .= "AND difficulty LIKE \"%".$dif."%\"";
    }
}

$sql = "SELECT * FROM meal ".$condition."";
$res = mysqli_query($conn, $sql);

print("<table border=\"1\">");
print("<tr><td>料理名</td><td>難易度</td><td>作り方</td><td>画像</td></tr>");
while($row = mysqli_fetch_array($res)) {
    print("<tr>");
    print("<td>".$row["name"]."</td>");
    print("<td>".$row["difficulty"]."</td>");
    print("<td>".$row["how_to_cook"]."</td>");
    print("<td>".$row["image"]."</td>");

       print("<td><a href= \"update_form.php?bid=".$row["name"]."\">更新</a></td>");
    print("<td><a href= \"library_delete.php?bid=".$row["name"]."\">削除</a></td>");
    print("</tr>");
}
print("</table>");
mysqli_free_result($res);
?>
</body>
</html>
