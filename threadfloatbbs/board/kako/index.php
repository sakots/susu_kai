<?php
function DispError($msg) {
	echo "<HTML><BODY>$msg</BODY></HTML>";
	exit;
}
#====================================================
#　初期情報の取得（設定ファイル）
#====================================================
#設定ファイルを読む
$set_pass = "../SETTING.TXT";
if (is_file($set_pass)) {
	$set_str = file($set_pass);
	foreach ($set_str as $tmp){
		$tmp = chop($tmp);
		list ($name, $value) = explode("=", $tmp);
		$SETTING[$name] = $value;
	}
}
else DispError("ERROR:ユーザー設定が消失しています!");

$kakolog = file("kako.txt");
@sort($kakolog);
@reset($kakolog);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=$SETTING['BBS_TITLE']?> 過去ログ倉庫</title>
</head>

<body style="background-color:#e3e3e3;">
<div style="margin-left: auto; margin-right: auto; width: 95%;">
<div style="background-color:#fcfcfc; padding: 10px;">
<p><a href="..">掲示板に戻る</a></p>
<p>
<?php
if ($kakolog) {
	foreach ($kakolog as $tmp) {
		echo $tmp;
	}
}
?>
</p>
</div>
</div>
</body>

</html>