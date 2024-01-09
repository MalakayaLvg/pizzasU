
<h2>Welcome to the pizzas</h2>
<?php
foreach ($pizzas as $pizza): ?>

<div class="container form-control">
    <h4>Name : <?= $pizza->getName(); ?> </h4>
    <h4>Size : <?= $pizza->getSize(); ?> cm </h4>
    <a href="?type=pizza&action=delete" class="btn btn-warning">Delete</a>
</div>


<?php endforeach; ?>




