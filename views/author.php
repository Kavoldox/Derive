<?php include(__DIR__.'/header.php') ?>

    <div class="container">
      <div class="row">
        <main class="col-12 col-lg-8">
            <?php foreach ($author as $auth) : ?>
                <p>Posts de <?= $auth['name'] ?></p>
            <?php endforeach; ?>
            <?php foreach ($postList as $currentPostsList) : ?>
                <article>
                    <div class="title"><?= $currentPostsList['title'] ?></div>
                    <p><?= $currentPostsList['text'] ?></p>
                    <div class="infos">Posté par <span><?= $currentPostsList['author_name'] ?></span></div>
                    <div class="infos">Publié le <span><?= $currentPostsList['published_date'] ?></span></div>
                    <div class="infos">Catégorie : <span><?= $currentPostsList['category_name'] ?></span></div>
                </article>
            <?php endforeach; ?>
        </main>
        <?php include(__DIR__.'/aside.php'); ?>
      </div>
    </div>

<?php include(__DIR__.'/footer.php'); ?>
