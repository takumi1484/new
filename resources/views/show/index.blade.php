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
                <p class="tel">ログインはこちら</p>
                <p class="form"><a href="ログインurl">ログイン</a></p>
            </div>
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
                        echo '最寄り駅:';
                        echo $user->station,'<br />chunithm:';
                        echo $user->chunithm,'台<br />maimai:';
                        echo $user->maimai,'台<br />voltex:';
                        echo $user->voltex,'台<br />jubeat:';
                        echo $user->jubeat,'台<br />coaster:';
                        echo $user->coaster,'台<br />';
                        ?>

                  </h5>
                <h3>コメント</h3>
                    <h5>
                        <?php
                        if (Auth::check()){$user = Auth::user();}else{$user->name = 'Nameless Gamer';}
                         ?>

                        <form method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <p>名前<br><input type="text" name="title" size="50" value="<?php echo $user->name;?>"></p>
                            <p>本文<br><textarea name="body" cols="50" rows="3"></textarea></p>
                            <?php
                                if (Auth::check()){
                                echo '<button name="shop" value=';
                                echo "{$_GET['name']}" ;
                                echo '>投稿</button>';
                                  }else{
                                echo 'ログインするとコメントが打てます';
                                 }
                            ?>
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
<?php
                if (Auth::check()){
                    echo '<h2>ようこそ</h2>';
                    echo '<a href="login">ログアウト</a>';
                }else{
                    echo '<h2>ログイン</h2>';
                    echo '<a href="login">ログインする</a></br>';
                    echo '<a href="register">新規登録</a>';
                }
                ?>

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
