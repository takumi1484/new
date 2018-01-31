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
<h1 id="logo"><a href="shop"><img src="images/logo.png" alt="Play OTOGE!!"></a></h1>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
<ul>
    <li><a href="shop">ホーム<span>Home</span></a></li>
    <li><a href="">各筐体説明<span>Instructions</span></a></li>
    <li><a href="">楽曲検索<span>Songs</span></a></li>
    <li><a href="">English<span>えいご</span></a></li>
</ul>
</nav>
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
    <li><a href="shop">ホーム<span>Home</span></a></li>
    <li><a href="">各筐体説明<span>Instructions</span></a></li>
    <li><a href="">楽曲検索<span>Songs</span></a></li>
    <li><a href="">English<span>えいご</span></a></li>
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


    {!! Form::open(['method' => 'GET']) !!}
    chunithm{!! Form::checkbox('chunithm', null,false) !!}
    maimai{!! Form::checkbox('maimai', null,false) !!}
    voltex{!! Form::checkbox('voltex', null,false) !!}
    jubeat{!! Form::checkbox('jubeat', null,false) !!}
    coaster{!! Form::checkbox('coaster', null,false) !!}

    <div class="control-group">
        {{ Form::label('native','場所',array('class'=>'control-label')) }}
        <div class="controls">
            {{ Form::select('list',array('all'=>'-未選択-','tokyo'=>'東京','chiba'=>'千葉','ibaraki'=>'茨城'),'1') }}
        </div>
    </div>


    {!! Form::submit('検索') !!}
    {!! Form::close() !!}


</h5>
<h3>検索結果</h3>
<h5>    @foreach($data as $shop)
        <div>
            <a href=show?id={{$shop->id}}&name={{$shop->name}}><div>name:{{{ $shop->name }}}</div></a>
            <div>station:{{{ $shop->station }}}</div>
        </div>
        <hr>
        @endforeach
</h5>

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

    <?php
    if (Auth::check()){
        echo '<h2>ようこそ</h2>';
        $user = Auth::user();
        echo $user->name,"さん</br>";
        echo '<a href="login">ログアウト</a>';
    }else{
        echo '<h2>ログイン</h2>';
        echo '<a href="login">ログインする</a></br>';
        echo '<a href="register">新規登録</a>';
    }
    ?>

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
