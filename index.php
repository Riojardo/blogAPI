<!DOCTYPE html>
<html>
<head>
    <title>Update/Delete Post</title>
</head>
<body>

<h2>Create New Post</h2>
<form method="post" action="routes/api.php/new">
    Author: <input type="text" name="author"><br><br>
    Title: <input type="text" name="title"><br><br>
    Body: <textarea name="body"></textarea><br><br>
    <input type="submit" name="create" value="Create Post">
</form>

<hr>

<h2>Update Post</h2>
<form method="post" action="routes/api.php/update">
    <input type="hidden" name="_method" value="PUT">
    ID: <input type="text" name="id_update"><br><br>
    Author: <input type="text" name="author"><br><br>
    Title: <input type="text" name="title"><br><br>
    Body: <textarea name="body"></textarea><br><br>
    <input type="submit" name="update" value="Update Post">
</form>

<hr>

<h2>Delete Post</h2>
<form method="POST" action="routes/api.php/delete">
    ID: <input type="text" name="id_delete"><br><br>
    <input type="submit" name="delete" value="Delete Post">
</form>

</body>
</html>