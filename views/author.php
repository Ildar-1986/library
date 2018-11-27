<ul style="list-style-type: none;">
    <?php
    foreach ($this->content as $content): ?>
        <li><a href="/AuthorView/?id=<?= $content['id_author'] ?>"><?= $content['name_author'] ?></a></li>
    <?php endforeach; ?>
</ul>


