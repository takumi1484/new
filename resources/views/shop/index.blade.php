<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>project0</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="サイト説明">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="../css/style.css">

</head>

<body>

<div id="head">

<header>
<div class="inner">
<h1 id="logo"><a href="Home"><img src="images/logo.png" alt="Sample"></a></h1>
<div id="contact">
<p class="tel">ログイン関係</p>
<p class="form"><a href="ログインurl">ログインボタン</a></p>
</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li><a href="../Home">ホーム<span>Home</span></a></li>
<li><a href="../Instructions">各筐体説明<span>Instructions</span></a></li>
<li><a href="../News">最新情報<span>News</span></a></li>
<li><a href="../About">サイト概要<span>About</span></a></li>
</ul>
</nav>
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="../Home">ホーム<span>Home</span></a></li>
<li><a href="../Instructions">各筐体説明<span>Instructions</span></a></li>
<li><a href="../News">最新情報<span>News</span></a></li>
<li><a href="../About">サイト概要<span>About</span></a></li>
</ul>
</nav>

</div>
<!--/head-->

<div id="contents">

<div id="contents-inner">

<div id="main">

<section>

<h2>検索</h2>

<h3>条件指定</h3>
<h5>
<form name="form" >
	<label>
        <input type="checkbox" name="test" value="TEST1" onClick="DisChecked();" />chunithm
    </label>
	<label>
		<input type="checkbox" name="test" value="TEST2" onClick="DisChecked();" />maimai
	</label>
    <label>
        <input type="checkbox" name="test" value="TEST3" onClick="DisChecked();" />voltex
    </label>
    <label>
        <input type="checkbox" name="test" value="TEST4" onClick="DisChecked();" />jubeat
    </label>
    <label>
        <input type="checkbox" name="test" value="TEST5" onClick="DisChecked();" />coaster
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
</select>

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
</script></select>

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
<select name="pref" id="pref">
<?php
$prefs = array('都道府県を選択','茨城県','千葉県','東京都');
foreach($prefs as $pref) {
	print('<option value="' . $pref . '">' . $pref . '</option>');
}
?>
</select>

    {!! Form::open(['method' => 'GET']) !!}
    {!! Form::checkbox('s', null,false) !!}

    {!! Form::submit('検索') !!}
    {!! Form::close() !!}

    @foreach($data as $shop)
        <div>
            <div>id:{{{ $shop->id }}}</div>
            <div>name:{{{ $shop->name }}}</div>
            <div>station:{{{ $shop->station }}}</div>
            <div>chunithm:{{{ $shop->chunithm }}}</div>
            <div>maimai:{{{ $shop->maimai }}}</div>
            <div>voltex:{{{ $shop->voltex }}}</div>
            <div>jubeat:{{{ $shop->jubeat }}}</div>
            <div>coaster:{{{ $shop->coaster }}}</div>
        </div>
        <hr>
    @endforeach






</h5>
<h3>検索結果</h3>
<p>aaaaaaa</p>

</section>

</div>
<!--/main-->

<div id="sub">

<nav class="box1">
<h2>アクセスカウンター</h2>
<p><script language="JavaScript" type="text/javascript">
 <!--
//桁数を入力
posNum = 7;

 document.write('<img src="../cts/counter_s.php?pos=0" width="0" height="0">');
 for(i=posNum; i>0; i--){
 document.write('<img src="../cts/counter_s.php?pos=' + i + '">');
 }
 -->
 </script></p>
</nav>

<section class="box1">
<h2>プロフ予定</h2>
<p>内容</p>
<p class="form"><a href="ゆーあーるえる">リンクボタン？</a></p>
</section>

<section class="box1">
<h2>更新履歴</h2>
<p><iframe src="../log.html">
 インラインフレーム対応ブラウザでご覧いただけます。</iframe></p>
</section>
<!--/box1-->



</div>
<!--/sub-->

</div>
<!--/contents-inner-->

</div>

<p id="pagetop"><a href="#">↑</a></p>

</div>
<!--/contents-->

<footer>
<div id="footermenu">
<ul>
<li><a href="#">未定</a></li>
</ul>
<ul>
<li><a href="#">未定</a></li>
</ul>
</div>
<!--/footermenu-->

<div id="copyright">
<span class="pr"><a>pre</a></span>
</div>

</footer>

</body>
</html>
