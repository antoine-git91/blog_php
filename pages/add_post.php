<?php



?>

<h2>Add post :</h2>
<hr/>

<form method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Post title" />
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <select class="form-control" id="author" name="author_id">
            <!-- User list -->
            <?php /*foreach ($users->getUsers() as $user): */?><!--
                <option value="<?/*= $user->id */?>"><?/*= $user->firstname . " " . $user->lastname */?></option>
            --><?php /*endforeach; */?>
        </select>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="8"></textarea>
        <small>HTML format</small>
    </div>
    <div class="form-group text-right">
        <input type="submit" class="btn btn-primary" name="post" value="Create post" />
    </div>
</form>