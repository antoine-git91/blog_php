<?php

use App\User;

require_once("../public/index.php");

$user = new User;
$user->deleteUser($_GET['id']);
$user = $user->getUser($_GET['id']);

?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete user</h5>
        </div>
        <div class="modal-body">
            <p>User <strong><?= $user->firstname . " " . $user->lastname ?></strong> and his/her posts are going to be deleted.</p>
            <p>Are you sure ?</p>
        </div>
        <div class="modal-footer">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
            <form method="post">
                <input type="hidden" name="id" value=user_id" />
                <input type="submit" class="btn btn-danger" value="Confirm"/>
            </form>
        </div>
    </div>
</div>