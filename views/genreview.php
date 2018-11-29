<div class="card-columns">
<?php
foreach ($this->content as $content):?>
    <div class="card mb-3">
        <img class="card-img-top" src="<?= $content['img'] ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $content['name_genre'] ?></h5>
            <p class="card-text"><?= $content['description'] ?></p>
            <div class="card-footer">
                <div>
                    <a href="#" class="spoiler_links">Спойлер</a>
                    <div class="spoiler_body">
                        <p>
                            <small class="text-muted">Автор:
                                <a href="/AuthorView/?id=<?= $content['id_author'] ?>"><?= $content['name_author'] ?></a>
                            </small>
                        </p>
                        <p>
                            <small class="text-muted">Жанры: <?= $content['name_genre'] ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

