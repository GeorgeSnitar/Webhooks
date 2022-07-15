
<?php 
include 'template.class.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
      die();
}

$body = file_get_contents('php://input');
$update = json_decode($body);


$template = new Template();
$data1 = "chat_id=".$update->message->chat->id."&text='".$update->message->text."'";

$template->set($data1);



