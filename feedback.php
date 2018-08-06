<meta charset="UTF-8">

<?
$name=strip_tags($_POST['name']);
$number=strip_tags($_POST['number']);
$email=strip_tags($_POST['email']);
$comment=strip_tags($_POST['comment']);
$send_count=strip_tags($_POST['send_count']); //Повесить сессию, чтобы учитывать количсество отправок конкретного юзера
$our_mail="shmelevivan20@gmail.com";
$cost=strip_tags($_POST['cost']);
$tech_task=strip_tags($_POST['tech_task']);
$design=strip_tags($_POST['design']);
$hours=strip_tags($_POST['hours']);

mail($our_mail, "Обратная связь сайта youtale.ru","Имя -  $name \n 
Телефон - $number \n
Email - $email \n
Комментарий - $comment \n
Стоимость: $cost |Тех. задание($tech_task)| |Дизайн($design)| |Часы($hours)|");
$name="";
$number="";
$email="";
$comment="";



?>