<html>
<head>
<title> GİRİS </title>
<link href="css/giris.css" type="text/css" rel="stylesheet" />
<meta charset="utf-8">
</head>
<body background="Resimler/girisap.jpg">

<div class="ustmenu">
            <ul>
                <li><a href="Anasayfa.html"> Anasayfa </a></li>
                <li><a href="Hakkimda.html"> Hakkımda </a></li>
                <li><a href="Ozgecmis.html"> Özgeçmişim </a></li>
                <li><a href="SakaryaHakkinda.html"> Sakarya Hakkında </a></li>
                <li><a href="Takimimiz.html"> Sakaryaspor </a></li>
                <li><a href="Index.php"> Giriş </a></li>
                <li><a href="Iletisim.html"> İletişim</a></li>
            </ul>
</div>
<br>
<form action="giris.php" method="POST">

<table align="center">
<tr>
<td>Kullanici Adi</td>
<td>:</td>
<td><input type="text" name="user"></td>
</tr>

<tr>
<td>Sifre</td>
<td>:</td>
<td><input type="password" name="pass"></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" value="Giris"></td>
</tr>

</table>

</form>
</body>
</html>