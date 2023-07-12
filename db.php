<?php

    //mails
    $mail_1 = new Email('antonello_stefania@booleaner.com' , 'quintus.devsus@renaeloob.com', 'Mail Object', 'Mail Content', 'Mail Atachment', true);
    $mail_2 = new Email('robertA_benfini@booleaner.com' , 'quintus.devsus@renaeloob.com', 'Mail Object2', 'Mail Content2', 'Mail Atachment2', false);
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
    $push_1 = new Push('Bux Bunny', 'Pluto', 'Object push notify', 'Push notify content', true, '<i class="fa-brands fa-facebook-messenger"></i>');
    $push_2 = new Push('Leclerc', 'Vettel', 'Object push notify', 'Push notify content', false, '<i class="fa-brands fa-instagram"></i>');
    
    $push = [
        $push_1,
        $push_2,
    ];


?>