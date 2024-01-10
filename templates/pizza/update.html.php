<h2>Edit the pizza !</h2>

<form action="" method="post">

    <input type="text" placeholder="name" name="name" value="<?= $pizza->getName() ?>">
    <input type="text" placeholder="size" name="size" value="<?= $pizza->getSize() ?>">
    <button type="submit" name="id" value="" class="btn btn-warning">EDIT</button>
    <a href="?type=pizza&action=index" class="btn btn-primary">back</a>

</form>
