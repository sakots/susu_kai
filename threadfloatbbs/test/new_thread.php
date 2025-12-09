<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache">
<script type="text/javascript">
<!--
NameMail = "<td nowrap align='right'>名前:</td><td nowrap><input type=text name=FROM style='width:50%;' value='" + getCookie("NAME") + "'></td></tr><tr><td nowrap align='right'>E-mail:</td><td><input type=text name=mail style='width:50%;' value='" + getCookie("MAIL") + "'></td>";
function getCookie(key, tmp1, tmp2, xx1, xx2, xx3) {
	tmp1 = " " + document.cookie + ";";
	while(tmp1.match(/\+/)) {
		tmp1 = tmp1.replace("+", " ");
	}
	xx1 = xx2 = 0;
	len = tmp1.length;
	while (xx1 < len) {
		xx2 = tmp1.indexOf(";", xx1);
		tmp2 = tmp1.substring(xx1 + 1, xx2);
		xx3 = tmp2.indexOf("=");
		if (tmp2.substring(0, xx3) == key) {
			return(unescape(tmp2.substring(xx3 + 1, xx2 - xx1 - 1)));
		}
		xx1 = xx2 + 1;
	}
	return("");
}
// -->
</script>
<title><?=$SETTING['BBS_TITLE']?></title>
<style>
<!--
a {text-decoration:none;}
html {overflow-y: scroll;}
-->
</style>
</head>

<body text="#000000" link="#0000FF" alink="#FF0000" vlink="#660099" bgcolor="<?=$SETTING['BBS_BG_COLOR']?>" background="<?=$SETTING['BBS_BG_PICTURE']?>">
<div align="center"><?=$bbs_title?></div>
<table border="0" cellspacing="0" cellpadding="3" width="95%" bgcolor="<?=$SETTING['BBS_MAKETHREAD_COLOR']?>" align="center">
<tr><td><form method="post" action="./bbs.php" enctype="<?=$enctype?>">
<table border="0" cellpadding="3" width="100%">
<tr>
<td nowrap colspan="2"><font size="+1"><b><?=$SETTING['BBS_TITLE']?></b></font><br></td>
</tr>
<tr>
<td colspan="2"><?php readfile($PATH."head.txt"); ?><br></td>
</tr>
<tr>
<td nowrap align="right">タイトル:</td>
<td><input type="text" name="subject" style="width:50%;"></td>
</tr>
<tr>
<script type="text/javascript">
    <!--
    document.write(NameMail);
    // -->
</script>
<noscript>
<td nowrap align='right'>名前:</td><td nowrap><input type=text name=FROM style="width:50%;"></td>
</tr>
<tr>
<td nowrap align='right'>E-mail:</td><td><input type=text name=mail style="width:50%;"></td>
</noscript>
</tr>
<tr>
<td nowrap align="right" valign="top">内容:</td><td><textarea style="width:90%; height:80px;" wrap="soft" name="MESSAGE"></textarea></td>
</tr>
<tr>
<td></td><td><?=$file_form?><input type="hidden" name="bbs" value="<?=$_POST['bbs']?>"><input type="hidden" name="time" value="<?=$NOWTIME?>"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="新規スレッド作成" name="submit"></td>
</tr>
</table>
</form></td></tr>
</table>
</body>

</html>