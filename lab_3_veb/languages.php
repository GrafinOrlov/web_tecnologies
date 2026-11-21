<?php
date_default_timezone_set('Europe/Moscow');
$title = 'Языки — Иванов Иван, гр. 000-000, ЛР №3';
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
                $current_page = true;
                echo $link;
            ?>"<?php
                if ($current_page) echo ' class="selected_menu"';
                echo '>' . $name;
            ?></a>
            <a href="<?php
                $name = 'Контакты';
                $link = 'contacts.php';
                $current_page = false;
                echo $link;
            ?>"<?php
                if ($current_page) echo ' class="selected_menu"';
                echo '>' . $name;
            ?></a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Языки, с которыми я знакомлюсь</h2>
            <p>Языков программирования очень много, и каждый создавался для своих задач. Для веб-разработки обязательны два языка разметки и оформления: HTML описывает, из чего состоит страница, а CSS отвечает за то, как она выглядит. Они не являются языками программирования в строгом смысле, но без них не обходится ни один сайт.</p>
            <p>Чтобы страница могла реагировать на действия посетителя, добавляют JavaScript: он выполняется прямо в браузере. А для работы на стороне сервера используют PHP, Python и другие языки. В таблице ниже я собрал те, с которыми уже познакомился или собираюсь познакомиться в ближайшее время.</p>
            <table>
                <tr><th>Язык</th><th>Для чего используется</th><th>Мой уровень</th></tr>
                <tr><td>HTML</td><td>Структура веб-страниц</td><td>Базовый</td></tr>
                <tr><td>CSS</td><td>Оформление сайтов</td><td>Изучаю</td></tr>
                <tr><td>PHP</td><td>Динамические страницы на сервере</td><td>Начальный</td></tr>
                <tr><td>JavaScript</td><td>Интерактивность на сайтах</td><td>Планирую изучать</td></tr>
                <tr><td>Python</td><td>Скрипты и автоматизация</td><td>Начальный</td></tr>
            </table>
        </section>
        <section>
            <h2>Советы тем, кто начинает</h2>
            <p>За время обучения я заметил несколько вещей, которые облегчают изучение любого языка. Они пригодятся и мне, и тем, кто только делает первые шаги:</p>
            <ul>
                <?php
                $tips = [
                    'Писать код самому, а не только читать чужие примеры',
                    'Разбирать каждую строчку и понимать, что она делает',
                    'Не бояться ошибок: сообщение об ошибке подсказывает, где искать проблему',
                    'Сначала описывать алгоритм словами, а затем переводить его в код',
                    'Делать небольшие проекты и постепенно усложнять их'
                ];
                foreach ($tips as $tip) echo '<li>' . $tip . '</li>';
                ?>
            </ul>
        </section>
    </main>
    <footer>Сформировано <?php echo date('d.m.Y'); ?> в <?php echo date('H-i:s'); ?></footer>
</body>
</html>
