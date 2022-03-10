<?php

require_once("../public/index.php");
$post = $db->prepare(
        "SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id FROM posts AS p LEFT JOIN users AS u ON p.author_id = u.id WHERE p.id = :post_id",
        [":post_id"=>$_GET['id']],
        "\App\Entity\Post",
        true
)
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete post</h5>
        </div>
        <div class="modal-body">
            <p>Post entitled <strong><?= $post->title ?></strong> is going to be deleted.</p>
            <p>Are you sure ?</p>
        </div>
        <div class="modal-footer">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
            <form method="post">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                <input type="submit" class="btn btn-danger" value="Confirm"/>
            </form>
        </div>
    </div>
</div>