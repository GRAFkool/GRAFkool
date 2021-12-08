<?
include_once"banzz/banzz.php";
include_once("files/gzip.php");
include 'files/antixak.php';
echo'<p align="center">';
echo'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta forua="true" http-equiv="Cache-Control" content="no-cache,no-store,must-revalidate"/><title>LineageII</title></head>
<link rel="stylesheet" href="dizain/style.css" type="text/css" />
<center>
';
include_once("files/ini.php");
//include_once("snow.js");
echo'</head>
<body>
<table>
<tr>
<td class="lt1"></td>
<td class="t1"><div><b><font color=lime>LineageII</font></b></div></td>
<td class="rt1"></td>
</tr>
<tr>
<td class="l"></td>
<td class="centertd"><div class="a">';
switch($_GET[action]){

	default;
if (isset($error))
{ echo'<center><font color=#FF0000>Необходима авторизация! Включите Cookies в Вашем браузере.</font></center><hr>'; }
if (isset($errors))
{ echo'<center><font color=#FF0000>Пароль или логин неверен.</font></center><hr>'; }
if (isset($exit))
{ echo'<font color=#FF0000>Вы успешно покинули игру! Враги не дремлют, а друзья ждут вас в игре! Возвращайтесь поскорей</font><hr>'; }
echo'<center><img src="dizain/logo.png"><br/>';
echo"<left>";
echo"<hr>";
$shans=rand(1,12);
if($shans==1){
echo"<font color=#FF0000>Добро пожаловать на сервер Lineage2!</font>";
}
if($shans==2){
echo"<font color=#FF0000>Погрузись в этот мир!</font>";
}
if($shans==3){
echo"<font color=#FF0000>Сделай закладку http://l2-mir.ru и заходи еще!</font>";
}
if($shans==4){
echo"<font color=#FF0000>Найди новых друзей!!!</font>";
}
if($shans==5){
echo"<font color=#FF0000>Только этот сервер является официальным из серии Lineage2</font>";
}
if($shans==6){
//echo"<font color=#FF0000>Голосуй за сервер и получай бонус</font>";
}
if($shans==7){
echo"<font color=#FF0000>Научись различать друга от врага</font>";
}
if($shans==8){
echo"<font color=#FF0000>Наш сервер входит в тройку наилучших wap браузерных Lineage 2 игор</font>";
}
if($shans==9){
echo"<font color=#FF0000>Главное правило сервера - не доставай Администрацию</font>";
}
if($shans==10){
echo"<font color=#FF0000>Не умееш играть? Так учись</font>";
}
if($shans==11){
echo"<font color=#FF0000>Первый и единственный сервер без донаторства</font>";
}
if($shans==12){
echo"<font color=#FF0000>Возможно ты измениш историю мира Lineage2</font>";
}
echo"<hr>";
echo'<b>Браузерная On-Line игра Lineage</b><br/>';
echo"<font color=blue>Сервер</font> <font color=lime>On</font><br/><font color=blue>Авторизация</font> <font color=lime>On</font><br/>";

echo'<form method="post" action="enter.php">';
echo "<center><b>Ник:</b><br/>";
echo "<input name=\"log\" maxlength=\"20\" title=\"nick\" emptyok=\"true\"/><br/>";
echo "<b>Пароль:</b><br/>";
echo "<input name=\"pas\"  type=\"password\"  maxlength=\"20\" title=\"password\" emptyok=\"true\"/><br/>";
echo '<input class="button" type="submit" value="Войти в игру"/></form><br/>';
$num = mysql_fetch_array(mysql_query("select count(udata0) as num from users"));
       $pr_q = mysql_query("SELECT * from `users` where udata56>('".time()."'-'600')");
       $pts = mysql_num_rows($pr_q);
echo "<center><div class=\"menu\"><a href=\"reg\">Регистрация <b><font color=orange>(".$num[0].")</font></b></a>";
//echo "<a href=\"pass.php\">Забыли пароль?</a>";
echo"<hr>";

$asd = mysql_query("SELECT time,title FROM news ORDER BY id DESC LIMIT 1");
$news = mysql_fetch_array($asd);

echo" <center><a href=\"negs\">Новости игры($news[time])</a>";
echo "<a href=\"index?action=online\">Кто в игре[$pts]</a>";
echo "<a href=\"index?action=help\">О игре</a>";
echo" <a href=\"index?action=castle\">Замки</a>";
echo "<a href=\"index?action=faqadmine\">Контакты</a>";
echo "<a href=\"index?action=friend\">Администраторам</a></div>";
break;
case 'help':
echo "
<font color=#FF0000>  Линейка</font> - это бесплатная онлайн MMORPG игра для мобильных телефонов! Нам совершенно реально удалось перенести этот невероятно захватывающий мир в твой мобильный телефон. Теперь ты можешь контролировать его в любое время, в любом месте.<br/>
<br/>
Выбери сторону добра или зла и посмотри вокруг … ты увидишь эльфов, орков, гномов, монстров и людей. Это мир где ты найдешь надежных друзей, которые не оставят тебя в сложный момент, с которыми ты будешь захватывать замки и нападать на монстров. Вселенная магии и постоянного развития, где каждый твой шаг изменяет все. Здесь есть все - кланы, арены, торговля, профессии, свитки, умения, таланты.<br/>
<br/>
Поначалу будет непросто у тебя появится много вопросов, на которых ты найдешь ответы благодаря накопленным знаниям и поддержке более опытных героев, которым нужны твои качества и стремление побеждать.<br/>
<br/>
Мы ждем тебя, герой!<br/>
<br/><a href=\"index.php?$sd\">На главную</a><br/><br/>";
break;
case 'friend':
echo '
Поставь игру себе на сайт<br>
Данная услуга полезна тем кто имеет сайт и хочет разнообразить его нашей игрой.<br>
Поставив у себя ссылку на игру вида<br>http://l2-mir.ru/index.php?url=ВАШ_САЙТ<br>
те кто по ней кликнут смогут попасть в игру Линейку, но обратная ссылка на главной будет вести на ваш сайт.
<br>- - -<br>
Вместо ВАШ_САЙТ пишите адрес своего сайта без http://
<br>- - -<br>
Скопируй ссылку: <br><input name="enter" value="http://l2-mir.ru/index.php?url=l2servak.ru" /><hr>
              
                <a href="index.php?url=primer.ru">Пример</a><hr>
<br/><a href="index.php?'.$sd.'">На главную</a><br/>';
break;
case 'faqadmine':	
echo 'Связаться с администрацией можно через «Центр Поддержки» в игре.<br/><br/>';
echo 'E-mail: l2servak@yandex.ru<br/><br/>';
echo '<b>Онлайн поддержка icq=458805866</b><br/>';
echo '
<img src="http://wwp.icq.com/scripts/online.dll?icq=&img=5" border="0" /><b></b><br/><br/>
Будем рады ответить на ваши вопросы, предложения, пожелания*<br/>
<br/><a href="index.php?'.$sd.'">На главную</a><br/>';
break;
case 'castle':

echo"<b>Замки</b><br/><br/>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Gludio'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Town of Gludio</b><br/>";
echo'<img src="pic/city/gludio.gif"><br/><br>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Dion'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Town of Dion</b><br/>";
echo'<img src="pic/city/dion.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Giran'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
 echo"<b>Town of Giran</b><br/>";
echo'<img src="pic/city/giran.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Rune Township'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Rune Township</b><br/>";
echo'<img src="pic/city/rune.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Schuttgart'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Town of Schuttgart</b><br/>";
echo'<img src="pic/city/schuttart.gif"><br/><br/>';
 echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Heine'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Heine</b><br/>";
echo'<img src="pic/city/heine.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";

$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Oren'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Town of Oren</b><br/>";
echo'<img src="pic/city/oren.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Goddard'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
 echo"<b>Town of Goddard</b><br/>";
echo'<img src="pic/city/goddard.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";
$aglava=mysql_query("SELECT * FROM `zamok` WHERE `name`='Town of Aden'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan'];
$ggg1=$arrs['gclan'];
echo"<b>Town of Aden</b><br/>";
echo'<img src="pic/city/aden.gif"><br/><br/>';
echo"
Контролируется: <b>$ggg1</b><br>
Лидер: $ggg<br><br>";

echo"<br><a href=\"index.php?\">На главную</a>";

break;

          case 'online':

       echo '<b>Кто в игре:</b><br/>';

      // Переменная хранит число сообщений выводимых на станице
$num = 10;
// Извлекаем из URL текущую страницу
$page = $_GET['page'];
// Определяем общее число сообщений в базе данных
$result = mysql_query("SELECT COUNT(*) FROM `users`  where `udata56`>('".time()."'-'600') ");
$posts = mysql_result($result, 0);
// Находим общее число страниц
$total = intval(($posts - 1) / $num) + 1;
// Определяем начало сообщений для текущей страницы
$page = intval($page);
// Если значение $page меньше единицы или отрицательно
// переходим на первую страницу
// А если слишком большое, то переходим на последнюю
if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;
// Вычисляем начиная к какого номера
// следует выводить сообщения
$start = $page * $num - $num;
// Выбираем $num сообщений начиная с номера $start
       $pr_q = mysql_query("SELECT * from `users`  where `udata56`>('".time()."'-'600') order by `udata19` desc LIMIT $start, $num ");
      if($page=="1"){$i=1;};        if($page=="2"){$i=11;};    if($page=="3"){$i=21;}; if($page=="4"){$i=31;}; if($page=="5"){$i=41;};      if($page=="6"){$i=51;}; if($page=="7"){$i=61;};     if($page=="8"){$i=71;};
if($page=="9"){$i=81;};  if($page=="10"){$i=91;};  if($page=="11"){$i=101;};
       while($arr = mysql_fetch_array($pr_q)) {

$aglava=mysql_query("SELECT * FROM `clan` WHERE `clan0`='$arr[udata23]'  ");
$arrs= mysql_fetch_array($aglava);
$ggg=$arrs['clan2'];



echo "<br>".$i.".";$sss=$arr['udata23'];
if($sss!==""){


if(!empty($ggg)){
echo"<img src=\"pic/clan/$ggg\" alt=\"clan\"/>";}}
if($arr['udata86'] >= "1"){
 	echo "<font color=red>".$arr['udata0']."</font>  (".$arr['udata9']." уровень) ";}else
if($arr['udata67'] == "200"){
echo "<font color=lime>".$arr['udata0']."</font> (".$arr['udata9']." уровень) ";}else
if($arr['udata67'] == "100"){
echo "<font color=blue>".$arr['udata0']."</font> (".$arr['udata9']." уровень) ";}else
if($arr['udata75']=="vip"){
	echo "<font color=gold>".$arr['udata0']."</font>  (".$arr['udata9']." уровень) ";}else{
 echo "".$arr['udata0']."  (".$arr['udata9']." уровень) ";}
 $i=$i+1;


}

 // Проверяем нужны ли стрелки назад
if ($page != 1) $pervpage = '<br><a href=index.php?action=online&page=1>1</a> ... ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' ... <a href=index.php?action=online&page=' .$total. '>' .$total. '</a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 2 > 0) $page2left = ' <a href=index.php?action=online&page='. ($page - 2) .'>'. ($page - 2) .'</a>  ';
if($page - 1 > 0) $page1left = '<a href=index.php?action=online&page='. ($page - 1) .'>'. ($page - 1) .'</a>  ';
if($page + 2 <= $total) $page2right = '  <a href=index.php?action=online&page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = '  <a href=index.php?action=online&page='. ($page + 1) .'>'. ($page + 1) .'</a>';

// Вывод меню
echo "<br>Страницы:";
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;


echo" <br><a href=\"index.php\">На главную</a><br/>";
break;
}

echo'<td class="r"></td>
</tr>
<tr>
<td class="lb"></td>
<td valign="top" class="bb"></td>
<td class="rb"></td>
</tr></table></body></html>';

$cfg = mysql_query("SELECT * FROM `igra`");
$configs = mysql_fetch_array($cfg);
list($msec,$sec)=explode(chr(1),microtime());
echo "<div class='foot'>";
echo "<center><font color='#999999'>".$configs[autor]." - ".$configs[year]."";
echo'<br>'.$times = date("H:i:s").'</small></center>';

echo'<center><div class=\"footer\"><a href="http://waplog.net/c.shtml?363045"><img src="http://c.waplog.net/363045.cnt"  alt="waplog" /></a></div>';
echo'</td></tr>
</body>
</html>
';
?>