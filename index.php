<?php 
    require __DIR__.'/models/sistem_comunication.php';
    require __DIR__.'/models/messages.php';
    require __DIR__.'/models/email.php';
    require __DIR__.'/models/push_notify.php';

    //mails
    $mail_1 = new Email('antonello_stefania@booleaner.com' , 'quintus.devsus@renaeloob.com', 'Mail Object', 'Mail Content', 'Mail Atachment', true);
    $mail_2 = new Email('robertA_benfini@booleaner.com' , 'quintus.devsus@renaeloob.com', 'Mail Object2', 'Mail Content2', 'Mail Atachment2', true);
    $mail_3 = new Email('simone-villardo@booleaner.com' , 'robertA_benfini@booleaner.com', 'Screen', 'Ciao RobertA hai bisogno di un screen?', 'Mail Atachment3', true);

    $mails = [
        $mail_1,
        $mail_2,
        $mail_3,
    ];
    
    //messages
    $msg_1 = new Msg('Antonello', 'Marco','Title Msg' ,'Content Msg', true, true);
    $msg_2 = new Msg('Leonardo', 'Silvia', 'Title Msg', 'Content Msg', false, false);
    
    $msgs = [
        $msg_1,
        $msg_2,
    ];

    //notifications
    $push_1 = new Push('Bux Bunny', 'Pluto', 'Object push notify', 'Push notify content', true, 'icona');
    $push_2 = new Push('Leclerc', 'Vettel', 'Object push notify', 'Push notify content', false, 'icona');
    
    $push = [
        $push_1,
        $push_2,
    ];

    var_dump($mails);
    var_dump($msgs);
    var_dump($push);
?>




<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>


</body>

</html>