<html>
<head><title>データの更新</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
<?php
$id = $_GET['id'];

$host = "localhost";
if (!$conn = mysqli_connect($host, "s1713120", "yamatch")){
    die("データベース接続エラー<br />");
}
mysqli_select_db($conn, "s1713120");
mysqli_set_charset($conn, "utf8");

$item = "";

$name = $_POST['name'];
if($name != ""){
   $name = str_replace("%", "\%", mysqli_escape_string($conn, $name));
    if($item == ""){
        $item = "name='$name'";
    }else{
        $item .= ", name='$name '";
    }
}

$how_to_cook = $_POST['how_to_cook'];
if($how_to_cook != ""){
    $how_to_cook = str_replace("%", "\%", mysqli_escape_string($conn, $how_to_cook));
    if($item == ""){
        $item = "how_to_cook='$how_to_cook'";
    }else{
        $item .= ", how_to_cook='$how_to_cook'";
    }
}

$difficulty = $_POST['difficulty'];
if($difficulty != ""){
    $difficulty = str_replace("%", "\%", mysqli_escape_string($conn, $difficulty));
    if($item == ""){
        $item = "difficulty='$difficulty'";
    }else{
        $item .= ", difficulty='$difficulty'";
    }
}


$sql = "UPDATE meal SET ".$item." WHERE id= ".$id."";


mysqli_query($conn, $sql)
    or die("更新できませんでした");
print("更新しました。<a href=\"search_form.html\">search_form.html</a>で確認してください。");
?>
<a href ="index.html">TOP</a>

</body>
</html>
