<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/app.css">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="left_column">
            <form id="message_form">
                <h1 class="title_send">Форма отправки</h1>
                <input type="text" name="full_name" id="fullname" placeholder="ФИО" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Сообщение" required></textarea>
                <input class="button_send" type="submit" value="Отправить">
            </form>
        </section>
        <section class="right_column">
            <h1 class="title_message">Сообщения</h1>
            <hr>
            <section class="messages" id="messages">
                <?php foreach($data as $value): ?>
                <article class="message">
                    <div class="top">
                        <h2><?php echo $value['full_name']?></h2>
                        <h3><?php echo $value['email']?></h3>
                    </div>
                    <div>
                        <?php echo $value['message']?>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>
        </section>
    </main>
</body>
<script src="/public/js/message.js"></script>
</html>
