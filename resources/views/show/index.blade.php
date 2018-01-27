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

                <h2>店舗情報</h2>

                <h3>
                    <?php
                        // $_GET関数で値を受け取る
                        $name = $_GET['name'];
                        // idを受け取り、変数に代入
                        // 出力
                        echo $name; // 変数nameを出力
                    ?>
                </h3>

                <h5>

                        <?php
                        //$id = $_GET['id'];
                        //echo $id;
                        //$p = $shop::where('id','=',"{$_GET['id']}")->get();
                        //$shop::where('id','=',"{$_GET['id']}")->get();
                        //echo $shop;
                        //echo $p;
                        //<div>{{{$shop-> where('id', '=' ,"{$_GET['id']}")->get()}}}</div>
                        //以上コメントアウト欄は没
                        //?>
                        <?php
                        $user = DB::table('shops')->where('id', "{$_GET['id']}")->first();
                        echo $user->id,'<br />';
                        echo $user->station,'<br />';
                        echo $user->chunithm,'<br />';
                        echo $user->maimai,'<br />';
                        echo $user->voltex,'<br />';
                        echo $user->jubeat,'<br />';
                        echo $user->coaster,'<br />';
                        ?>

                  </h5>
                <h3>コメント</h3>
                    <h5>

                        <form method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <p>名前<br><input type="text" name="title" size="50" value="Nameless gamer"></p>
                            <p>本文<br><textarea name="body" cols="50" rows="3"></textarea></p>

                            <button name="shop" value=<?php echo "{$_GET['name']}" ; ?>>投稿</button>
                        </form>
                        </br>


                        <?php
                        $say = $posts->where('shop',"{$_GET['name']}");
                        foreach ($say as $s){
                            echo '<hr />',$s->title;
                            echo '　投稿日時',$s->created_at,'<br />';
                            echo $s->body;
                        }
            ?>

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
