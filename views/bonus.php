<?php 
require '_head.php'; 
require '_navbar.php';

?>
<div class="container">
    <form action="" method="POST">
        <input type="number" name="number1" id="number" placeholder="Enter a number">
        <input type="number" name="number2" id="receiver" placeholder="Enter another number">
        <select name="operator" id="">
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="median">Median</option>
        </select>
    </form>
    <p>
        <?php echo "The result is" .$result; ?>
    </p>
</div>