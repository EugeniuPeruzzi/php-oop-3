<?php 
    require __DIR__.'/models/sistem_comunication.php';
    require __DIR__.'/models/messages.php';
    require __DIR__.'/models/email.php';
    require __DIR__.'/models/push_notify.php';
    require __DIR__.'/db.php';

    //var_dump($mails);
    //var_dump($msgs);
    //var_dump($push);
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
    <div class="container">
        <div class="row">
            <div class="text-center my-5">
                <h1>PHP OOP 3</h1>
            </div>
            <!-- MAILS -->
            <div class="col-12">
                <h1 class="my-4">Mails <i class="fa-solid fa-at"></i></h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sender</th>
                            <th scope="col">Reciver</th>
                            <th scope="col">Object</th>
                            <th scope="col">Content</th>
                            <th scope="col">Attachment</th>
                            <th scope="col">Delivered</th>
                            <th scope="col">Notification</th>
                            <th scope="col">More</th>
                            <th scope="col">Led Color</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mails as $index => $show) { ?>
                            <tr>
                                <td><?php echo $show->getSender(); ?></td>
                                <td><?php echo $show->getRiciver(); ?></td>
                                <td><?php echo $show->getMsgObject(); ?></td>
                                <td><?php echo $show->getContent(); ?></td>
                                <td><?php echo $show->attachment; ?></td>
                                <td><?php echo $show->getDeliveryNotify() ? 'Deliverd' : 'Ongoing'; ?></td>
                                <td><?php echo $show::$notification; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mx-2"><?php echo $show->getSend() ?></div>
                                        <div class="mx-2"><?php echo $show->getForwad()?></div>
                                        <div class="mx-2"><?php echo $show->getPrint() ?></div>
                                    </div>
                                </td>
                                <td><?php echo $show::$ledColor; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- MESSAGES -->
            <div class="col-12 mt-5">
                <h1 class="my-4">Messages <i class="fa-regular fa-message"></i> </h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sender</th>
                            <th scope="col">Reciver</th>
                            <th scope="col">Object</th>
                            <th scope="col">Content</th>
                            <th scope="col">Notification</th>
                            <th scope="col">Status</th>
                            <th scope="col">Message Accepted</th>
                            <th scope="col">More</th>
                            <th scope="col">Led Color</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($msgs as $index => $show) { ?>
                            <tr>
                                <td><?php echo $show->getSender(); ?></td>
                                <td><?php echo $show->getRiciver(); ?></td>
                                <td><?php echo $show->getMsgObject(); ?></td>
                                <td><?php echo $show->getContent(); ?></td>
                                <td><?php echo $show::$notification; ?></td>
                                <td><?php echo $show->getSetAsRead() ? 'Read' : 'Delivered'; ?></td>
                                <td><?php echo $show->getAccettazioneRisposta() ? 'Message Accepted' : 'Message not Accepted' ?></td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mx-2"><?php echo $show->getReply()?></div>
                                        <div class="mx-2"><?php echo $show->getSend() ?></div>
                                    </div>
                                </td>
                                <td><?php echo $show::$ledColor; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- PUSH NOTIFICATION -->
            <div class="col-12 mt-5">
                <h1 class="my-4">Push Notification <i class="fa-regular fa-bell"></i> </h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sender</th>
                            <th scope="col">Reciver</th>
                            <th scope="col">Object</th>
                            <th scope="col">Content</th>
                            <th scope="col">Notification</th>
                            <th scope="col">Status</th>
                            <th scope="col">Platform</th>
                            <th scope="col">More</th>
                            <th scope="col">Led Color</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($push as $index => $show) { ?>
                            <tr>
                                <td><?php echo $show->getSender(); ?></td>
                                <td><?php echo $show->getRiciver(); ?></td>
                                <td><?php echo $show->getMsgObject(); ?></td>
                                <td><?php echo $show->getContent(); ?></td>
                                <td><?php echo $show::$notification; ?></td>
                                <td><?php echo $show->getVisible() ? 'Online' : 'Offline'; ?></td>
                                <td><?php echo $show->getIcon()?></td>
                                <td>
                                    <div class="d-flex">
                                        <div class="mx-2"><?php echo $show->getClick()?></div>
                                        <div class="mx-2"><?php echo $show->getSend() ?></div>
                                    </div>
                                </td>
                                <td><?php echo $show::$ledColor; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>