<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>test</title>
</head>
<body>

<select name="pref" id="pref">
<?php
$prefs = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県');
foreach($prefs as $pref) {
	print('<option value="' . $pref . '">' . $pref . '</option>');
}
?>
</select>
<br<br>
<form name="form" >
	<label>
		<input type="checkbox" name="test" value="TEST1" onClick="DisChecked();" />太鼓の達人
	</label>
	<label>
		<input type="checkbox" name="test" value="TEST2" onClick="DisChecked();" />チュウニズム
	</label>
	<label>
		<input type="checkbox" name="test" value="TEST3" onClick="DisChecked();" />maimai
	</label>
	<label>
		<input type="checkbox" name="test" value="TEST4" onClick="DisChecked();" />スクフェス
	</label>
	<label>
	<input type="checkbox" name="all" onClick="AllChecked();" />全て選択/解除
	</label>
</form>

<script language="JavaScript" type="text/javascript">
<!--
// 「全て選択」チェックで全てにチェック付く
function AllChecked(){
	var all = document.form.all.checked;
	for (var i=0; i<document.form.test.length; i++){
		document.form.test[i].checked = all;
		}
	}
// 一つでもチェックを外すと「全て選択」のチェック外れる
function DisChecked(){
	var checks = document.form.test;
	var checksCount = 0;
	for (var i=0; i<checks.length; i++){
		if(checks[i].checked == false){
			document.form.all.checked = false;
		}else{
			checksCount += 1;
			if(checksCount == checks.length){
				document.form.all.checked = true;
					}
				}
			}
		}
// -->
</script>

</body>
</html>
