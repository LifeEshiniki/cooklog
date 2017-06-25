<html>
<head><title>更新フォーム</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
料理の更新
<form action="update_shokuzai_done.php?id=<?php print( $_GET['mid'] ); ?>" method="post">
<table border="1" cellspacing="0">
<tr>
<td>食材名</td>
<td><input type="text" name="zairyou"></td>
</tr>
<tr>
<td>食材の量</td>
<td><input type="text" name="ryou"></td>
</tr>
<tr>
<td>量の単位</td>
<td><input type="text" name="unit"></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="更新"></td>
</tr>
</table>
</form>
</body>
</html>
