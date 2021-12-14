<!DOCTYPE html>
<html>
<head>
    <?php session_start()?>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project/webroot/styles.css">
    <title><?= $title ?></title>
</head>
<body>
<div id="wrap">
    <div class="per"></div>
    <header>
        <ul class="menu-main">
            <li><a href="/index/">Главная</a></li>
            <li><a href="/about/">О нас</a></li>
            <li><a href="/animals/">Животные</a></li>
            <li><a href="/contacts/">Контакты</a></li>
        </ul>
    </header>
    <div class="container">
        <main>
            <?=$content ?>
        </main>
    </div>
</div>
<footer>
    <div id="social">
        <a href="https://vk.com/darker_r">
            <img src="/project/webroot/img/vk.png" alt="Вк">
        </a>
        <a href="https://instagram.com/goraffin">
            <img src="/project/webroot/img/inst.png" alt="Инстаграм"/>
        </a>
    </div>
    <div id="rights">
        Все права защищены &copy; <?php echo date('Y')?>
    </div>
</footer>
</body>
</html>