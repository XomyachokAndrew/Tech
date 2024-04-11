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
            <form action="" method="post">
                <h1 class="title_send">Форма отправки</h1>
                <input type="text" name="fullname" id="fullname" placeholder="ФИО">
                <input type="email" name="mail" id="mail" placeholder="Email">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Сообщение"></textarea>
                <input class="button_send" type="submit" value="Отправить">
            </form>
        </section>

        <section class="right_column">
            <h1 class="title_message">Сообщения</h1>
            <hr>
            <section class="messages">
                <article class="message">
                    <div class="top">
                        <h2>Name</h3>
                        <h3>Mail</h2>
                    </div>
                    <div>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi minus saepe repudiandae aperiam maxime hic quis. Possimus ratione tempora vel cupiditate maiores non omnis velit impedit consequuntur accusamus, perferendis iste.
                    </div>
                </article>
                <article class="message">
                    <div class="top">
                        <h2>Name</h3>
                        <h3>Mail</h2>
                    </div>
                    <div>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi minus saepe repudiandae aperiam maxime hic quis. Possimus ratione tempora vel cupiditate maiores non omnis velit impedit consequuntur accusamus, perferendis iste.
                    </div>
                </article>
            </section>
        </section>
    </main>
    <!-- <div class="left_column">
        
    </div>

    <div class="right_column">
        <p>Сообщения</p>
        <hr>
        <div class="message">
            <div>
                <div class="name"></div>
                <div class="mail"></div>
            </div>
            <div class="text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam quibusdam nihil asperiores accusamus consequatur. Rerum illum voluptates minus, sit, corporis quis odio sunt accusamus officia ea est reiciendis pariatur incidunt?
            </div>
        </div>
    </div> -->
</body>
</html>