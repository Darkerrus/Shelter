<h1 align="center">Наши животные</h1>
<div id="content">
        <?php foreach ($pages as $page): ?>
            <div align="center">
                <h1><?= $page['name']; ?></h1>
                <img width="20%" src="<?= $page['img']; ?>" alt="Фото">
                <p><a href="/animal/<?= $page['id']; ?>/">ссылка на страницу</a></p>
            </div>
        <?php endforeach; ?>
</div>