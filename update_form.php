<html>
<head><title>更新フォーム</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
料理の更新
<form action="library_update.php?id=<?php print( $_GET['mid'] ); ?>" method="post">
<table border="1" cellspacing="0">
<tr>
<td>料理名</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>難易度</td>
<td>
<p>
<select name="difficulty" size="1">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</p></td>

</tr>
<tr>
<td>つくりかた</td>
<td><input type="text" name="how_to_cook"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="更新"></td>
</tr>
</table>
</form>
</body>
</html>
