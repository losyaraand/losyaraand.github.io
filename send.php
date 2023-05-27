<?php
$mero = $_POST['mero'];
$secondname = $_POST['secondname'];
$firstname = $_POST['firstname'];
$otche = $_POST['otche'];
$telephone = $_POST['telephone'];
$pochta = $_POST['pochta'];
$vardate = $_POST['vardate'];


$mero = htmlspecialchars($mero);
$secondname = htmlspecialchars($secondname);
$firstname = htmlspecialchars($firstname);
$otche = htmlspecialchars($otche);
$telephone = htmlspecialchars($telephone);
$pochta = htmlspecialchars($pochta);
$vardate = htmlspecialchars($vardate);

$mero = urlencode($mero);
$secondname = urlencode($secondname);
$firstname = urlencode($firstname);
$otche = urlencode($otche);
$telephone = urlencode($telephone);
$pochta = urlencode($pochta);
$vardate = urlencode($vardate);

$mero = trim($mero);
$secondname = trim($secondname);
$firstname = trim($firstname);
$otche = trim($otche);
$telephone = trim($telephone);
$pochta = trim($pochta);
$vardate = trim($vardate);

if (mail("apostolandrey2002@gmail.com", "Тема", "Имя:".$firstname, .$secondname, .$otche, .$mero, .$telephone, .$vardate.". E-mail:".$pochta , "From: localhost@mail.ru \r\n"))
){
     echo ("Сообщение успешно доставлено!");
}

else {
     echo ("При отправке возникла ошибка.");
}

?>