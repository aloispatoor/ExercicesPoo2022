<?php 
require '_head.php'; 
require '_navbar.php';




?>
<div class="container">
    <form action="/form" method="POST">
        <input type="number" name="number1" placeholder="Enter a number">
        <input type="number" name="number2" placeholder="Enter another number">
        <a href="<?php echo add(); ?>" class="btn btn-secondary">+</a>
        <a href="<?php echo substract(); ?>" class="btn btn-secondary">-</a>
        <a href="<?php echo multiply(); ?>" class="btn btn-secondary">*</a>
        <a href="<?php echo divide(); ?>" class="btn btn-secondary">/</a>
        <a href="<?php echo median(); ?>" class="btn btn-secondary">Median</a>
    </form>
    <p>
        <?php echo "The result is" .$result; ?>
    </p>
</div>