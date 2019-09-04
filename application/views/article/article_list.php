<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 03.09.2019
 * Time: 20:16
 */
?>
<style>
    td a {
        padding: 0 10px;
    }
</style>
<h2>List of articles</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Short description</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($articles as $article){ ?>
        <tr>
            <td><?= $article['id']?></td>
            <td><?= $article['article_title']?></td>
            <td><?= $article['article_description']?></td>
            <td>
                <a href="/main/read_article/<?= $article['id'] ?>">Read</a>
                <a href="/main/edit_article/<?= $article['id'] ?>">Edit</a>
                <a href="/main/delete_article/<?= $article['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php }?>

    </tbody>
</table>
<a style="float: left" href="/main/add_article" class="btn btn-primary">Add article</a>