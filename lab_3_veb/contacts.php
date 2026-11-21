<?php
date_default_timezone_set('Europe/Moscow');
$title = 'Контакты — Иванов Иван, гр. 000-000, ЛР №3';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Языки программирования</h1>
        <nav>
            <a href="<?php
                $name = 'Главная';
                $link = 'index.php';
                $current_page = false;
                echo $link;
            ?>"<?php
                if ($current_page) echo ' class="selected_menu"';
                echo '>' . $name;
            ?></a>
            <a href="<?php
                $name = 'Языки';
                $link = 'languages.php';
                $current_page = false;
                echo $link;
            ?>"<?php
                if ($current_page) echo ' class="selected_menu"';
                echo '>' . $name;
            ?></a>
            <a href="<?php
                $name = 'Контакты';
                $link = 'contacts.php';
                $current_page = true;
                echo $link;
            ?>"<?php
                if ($current_page) echo ' class="selected_menu"';
                echo '>' . $name;
            ?></a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Как со мной связаться</h2>
            <p>Если у вас есть вопросы по сайту, предложения или вы хотите обсудить изучение программирования, напишите мне любым удобным способом. Это учебный сайт, и мне важно знать, что на нём можно сделать лучше. Я стараюсь отвечать на сообщения в течение одного-двух дней.</p>
            <ul>
                <?php
                $contacts = [
                    'Почта: ivan.petrov@example.com',
                    'Телефон: +7 (900) 123-45-67',
                    'Telegram: @ivan_petrov'
                ];
                foreach ($contacts as $contact) echo '<li>' . $contact . '</li>';
                ?>
            </ul>
            <p>Лучше всего писать в будни: в выходные я обычно занимаюсь учёбой и собственными проектами, поэтому ответ может прийти чуть позже. Если вопрос срочный, позвоните по телефону или напишите в мессенджер.</p>
            <p>Все сообщения я читаю лично. Жалобы и сообщения об ошибках разбираю в первую очередь, потому что исправить недочёт на сайте важнее, чем добавить новый раздел. Хорошие предложения по содержанию и оформлению я записываю в список задач и по возможности добавляю на сайт.</p>
        </section>
        <section>
            <h2>Обратная связь</h2>
            <p>Если хотите оставить жалобу или предложение, воспользуйтесь формой ниже. Укажите, пожалуйста, своё имя и адрес электронной почты, чтобы я мог ответить. К сообщению можно приложить файл, например скриншот страницы с ошибкой.</p>
            <form action="https://httpbin.org/post" method="post" enctype="multipart/form-data">
                <label for="fio">ФИО</label>
                <input type="text" id="fio" name="fio" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label>Откуда узнали о нас</label>
                <input type="radio" id="src1" name="source" value="search" checked>
                <label for="src1" class="inline">Поиск</label>
                <input type="radio" id="src2" name="source" value="friends">
                <label for="src2" class="inline">От друзей</label>
                <input type="radio" id="src3" name="source" value="social">
                <label for="src3" class="inline">Соцсети</label>

                <label for="type">Тип обращения</label>
                <select id="type" name="type">
                    <option value="complaint">Жалоба</option>
                    <option value="suggestion">Предложение</option>
                </select>

                <label for="message">Текст сообщения</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <label for="file">Вложения</label>
                <input type="file" id="file" name="file">

                <label>
                    <input type="checkbox" name="agree" required>
                    Даю согласие на обработку персональных данных
                </label>

                <button type="submit">Отправить</button>
            </form>
        </section>
    </main>
    <footer>Сформировано <?php echo date('d.m.Y'); ?> в <?php echo date('H-i:s'); ?></footer>
</body>
</html>
