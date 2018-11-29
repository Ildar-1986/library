<div class="card-columns" style="margin-top: 200px">
<?php
foreach ($this->contents as $content):?>
        <div class="card mb-3" >
            <img class="card-img-top" src="<?= $content['img'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $content['name_book'] ?></h5>
                <p class="card-text"><?= $content['description'] ?></p>
                <div class="card-footer">
                    <div>
                        <a href="#" class="spoiler_links">Спойлер</a>
                        <div class="spoiler_body">
                            <p class=><small class="text-muted">Автор:
                                    <a href="/AuthorView/?id=<?=$content['id_author'] ?>"><?=$content['name_author'] ?></a></small></p>
                            <p class=><small class="text-muted">Жанры:
                                    <a href="/GenreView/?id=<?=$content['id_genre'] ?>"> <?=$content['name_genre'] ?></a></small></p>
                        </div>
                    </div>
                </div>
           </div>
        </div>
<?php endforeach; ?>

