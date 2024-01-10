
<h2>Welcome to the pizzas</h2>
<?php
foreach ($pizzas as $pizza): ?>

<div class="container form-control">
    <h4>Name : <?= $pizza->getName(); ?> </h4>
    <h4>Size : <?= $pizza->getSize(); ?> cm </h4>
    <a href="?type=pizza&action=delete&id=<?= $pizza->getId() ?>" class="btn btn-danger">Delete</a>
    <a href="?type=pizza&action=show&id=<?= $pizza->getId() ?>" class="btn btn-primary">Show</a>
    <a href="?type=pizza&action=update&id=<?= $pizza->getId() ?>" class="btn btn-warning">Edit</a>
</div>


<?php endforeach; ?>

<a href="?type=pizza&action=insert" class="btn btn-primary">+ New</a>




