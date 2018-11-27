<ul style="list-style-type: none;">
    <?php
    foreach ($this->content as $content):?>
        <li><a href="/GenreView/?id=<?= $content['id_genre'] ?>"><?= $content['name_genre'] ?></a></li>
    <?php endforeach; ?>
</ul>

