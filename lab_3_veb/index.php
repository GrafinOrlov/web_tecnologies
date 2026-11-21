<?php
date_default_timezone_set('Europe/Moscow');
$title = 'Главная — Иванов Иван, гр. 000-000, ЛР №3';
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
                $current_page = true;
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
            <h2>Почему я изучаю программирование</h2>
            <p>Мне интересно, как из нескольких строк кода получаются сайты, приложения и игры. Сейчас я учусь делать веб-страницы и постепенно знакомлюсь с разными языками программирования: у каждого из них свои задачи и своя логика.</p>
            <p>Всё начинается с HTML и CSS: они отвечают за структуру и внешний вид страницы. Затем к ним добавляется язык, который работает на стороне сервера, например PHP, и страницы перестают быть статичными: они могут показывать текущее время, подставлять заголовки, собирать меню и список из данных.</p>
            <p>На этом сайте я собираю то, что узнаю в процессе обучения: краткие описания языков, таблицу сравнения и способы связаться со мной. Фотографии ниже меняются местами каждую секунду. Это работа небольшого PHP-скрипта, который смотрит, чётная сейчас секунда или нечётная.</p>
            <p>Главное в обучении — практика. Читать про синтаксис полезно, но по-настоящему язык понимаешь только тогда, когда пишешь на нём собственные маленькие проекты, ошибаешься и исправляешь ошибки. Поэтому я стараюсь каждую неделю делать хотя бы одну небольшую работу.</p>
            <div class="photos">
                <?php
                // замените на 'fotos/foto1.jpg' и 'fotos/foto2.jpg', если используете свои файлы
                $photos = [
                    'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600',
                    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600'
                ];
                $n = date('s') % 2; // 0 при чётной секунде, 1 при нечётной
                echo '<img src="' . $photos[$n] . '" alt="Меняющаяся фотография 1">';
                echo '<img src="' . $photos[1 - $n] . '" alt="Меняющаяся фотография 2">';
                ?>
            </div>
        </section>
        <section>
            <h2>Мои цели</h2>
            <p>Пока я только в начале пути, но направление уже понятно. Вот что я хочу успеть в ближайшее время:</p>
            <ul>
                <?php
                $goals = [
                    'Уверенно верстать страницы на HTML и CSS',
                    'Освоить основы PHP и научиться делать динамические страницы',
                    'Изучить JavaScript для интерактивных элементов',
                    'Написать первый собственный проект и выложить его в интернет'
                ];
                foreach ($goals as $goal) echo '<li>' . $goal . '</li>';
                ?>
            </ul>
        </section>
    </main>
    <footer>Сформировано <?php echo date('d.m.Y'); ?> в <?php echo date('H-i:s'); ?></footer>
</body>
</html>
