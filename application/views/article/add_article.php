<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 03.09.2019
 * Time: 19:16
 */?>
<h2>Add new post</h2>
<?= form_open('/main/save_article', array('type'=>'post', 'id' => 'add_article')); ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Article title</label>
        <input required name="article_title" type="text" class="form-control" placeholder="Enter article title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Short description</label>
        <textarea  name="article_description" required class="form-control" placeholder="Enter article description"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Text</label>
        <textarea name="article_text" required class="form-control" placeholder="Enter text"></textarea>
    </div>
    <a style="float: left" href="/" class="btn btn-primary">Back</a>
    <button style="float: right" type="submit" class="btn btn-primary">Add</button>
<?= form_close(); ?>