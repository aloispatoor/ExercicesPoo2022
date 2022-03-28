<?php 
require '_head.php'; 
require '_navbar.php';

?>
<div class="container">
    <form action="/calculate" method="POST">
        <input type="number" name="number1" placeholder="Enter a number">
        <input type="number" name="number2" placeholder="Enter another number">
        <a href="<?php echo $this->$number->add(); ?>" class="btn btn-secondary">+</a>
        <a href="<?php echo $this->$number->substract(); ?>" class="btn btn-secondary">-</a>
        <a href="<?php echo $this->$number->multiply(); ?>" class="btn btn-secondary">*</a>
        <a href="<?php echo $this->$number->divide(); ?>" class="btn btn-secondary">/</a>
    </form>
    <p>
        <?php echo "The result is" .$result; ?>
    </p>
</div>