<?php 
require '_head.php'; 
require '_navbar.php';




?>
<div class="container">
    <form action="/Controller" method="POST">
        <input type="number" name="number1" placeholder="Enter a number">
        <input type="number" name="number2" placeholder="Enter another number">
        <a href="" class="btn btn-secondary">+</a>
        <a href="" class="btn btn-secondary">-</a>
        <a href="" class="btn btn-secondary">*</a>
        <a href="" class="btn btn-secondary">/</a>
        <a href="" class="btn btn-secondary">Median</a>
    </form>
    <p></p>
</div>