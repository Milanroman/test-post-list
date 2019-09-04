<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 04.09.2019
 * Time: 22:56
 */?>
<?= form_open('/main/update_article/'.$article['id'], array('type'=>'post', 'id' => 'update_article')); ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Article title</label>
        <input required name="article_title" type="text" class="form-control" placeholder="Enter article title" value="<?= $article['article_title'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Short description</label>
        <textarea  name="article_description" required class="form-control" placeholder="Enter short description"><?= $article['article_description'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Text</label>
        <textarea name="article_text" required class="form-control" placeholder="Enter text"><?= $article['article_text'] ?></textarea>
    </div>
    <a style="float: left" href="/" class="btn btn-primary">Back</a>
    <button style="float: right" type="submit" class="btn btn-primary">Update</button>

<?= form_close(); ?>