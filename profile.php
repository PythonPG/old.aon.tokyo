<?php include("../uon.tokyo/common_head_1.html"); ?>
<title>Welcome! http://<?php echo $_SERVER['SERVER_NAME']; ?> = Masahiro Ishizuka CEO（東京都あきる野市のPythonプログラマー　石塚　正浩　代表）</title>
<style>
.business{width:60%;max-width:570px;margin:20px auto;position:relative;min-height:500px;}
.profile{width:100%;position:absolute;left:0;top:0;z-index:10;}
.profileImg{width:100%;}
.profileText{font-size:24px;margin-top:15px;font-weight:700;}
.deal{position:absolute;left:0;top:0;z-index:1;}
th,td{text-align:left}
td{padding-left:15px}
.homeButton{margin-top:20px;text-align:center;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php include("../uon.tokyo/common_head_2.html"); ?>
<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/" class="logo"><img src="../img/<?php echo $_SERVER['SERVER_NAME']; ?>.png" 　width="10%" height="10%"></a>
<div class="business">
<div class="profile">
<img src="../img/profile.jpeg" class="profileImg">
<p class="profileText">Masahiro Ishizuka Web Debeloper</p>
</div>
<div class="deal">
<table>
<p class="profileText">特定商取引法に基づく表記</p>
<tr><th>販売事業者名＆屋号</th><td>エーオン</td></tr>
<tr><th>運営責任者名＆代表者</th><td>石塚　正浩</td></tr>
<tr><th>所在地</th><td>〒1970828 東京都あきる野市秋留5-3-11</td></tr>
<tr><th>連絡先メールアドレス</th><td>discordliveshare＠gmail.com</td></tr>
<tr><th>連絡先電話番号</th><td>07038615011</td></tr>
<tr><th>営業日</th><td>不定期営業</td></tr>
<tr><th>販売価格</th><td>TVCHAT無料￥0～￥3,000前後/1時間</td></tr>
<tr><th>代金支払い時期</th><td>お申し込み時</td></tr>
<tr><th>代金支払い方法</th><td>クレジットカード</td></tr>
<tr><th>サービスの提供(引き渡し)時期</th><td>ご予約の日時</td></tr>
<tr><th>商品等の返品可否と条件</th><td>キャンセルは受け付けておりません</td></tr>
</table>
<p class="homeButton"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/">ホームページへ戻る</a></p>
</div>
</div>
<script>
$(function(){
    setTimeout(function(){
        $('.profile').fadeOut();
    },2000);
});
</script>
<?php include("../uon.tokyo/common_footer_start.html"); ?>
<p class="copy">Copyright (C) 2020 <?php echo $_SERVER['SERVER_NAME']; ?>,Masahiro Ishizuka(石塚　正浩),〒197-0828,5-3-11 Akiru Akiruno-City Tokyo Japan,TEL
            :042-559-8638,iPhone:070-3861-5011,Skype: live:cloud9slack，discordliveshare@gmail.com, All Rights Reserved.</p>
<?php include("../uon.tokyo/common_footer_end.html"); ?>