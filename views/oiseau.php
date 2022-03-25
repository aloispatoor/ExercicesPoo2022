<?php 
require '_head.php'; 
require '_navbar.php';

use App\Animalerie\Animal\Oiseau;


?>
<body>
    <div class="container">
        <section>
            <h1>Birds : Playground </h1>
            <h3>Identity of the birds :</h3>
            <p>Eagle : <?php echo $eagle->identify(); ?></p>
            <p>Albatros : <?php echo $albatros->identify(); ?></p>
            <p>Piegon : <?php echo $pigeon->identify(); ?></p>
            <h3>When they are afraid, what will they do :</h3>
            <p>Eagle : <?php echo $eagle->flee(); ?></p>
            <p>Albatros : <?php echo $albatros->flee(); ?></p>
            <p>Piegon : <?php echo $pigeon->flee(); ?></p>
            <h3>What do they eat ? :</h3>
            <p>Eagle : <?php echo $eagle->eat(); ?></p>
            <p>Albatros : <?php echo $albatros->eat(); ?></p>
            <p>Piegon : <?php echo $pigeon->eat(); ?></p>
            <h3>Would they migrate :</h3>
            <p>Eagle : <?php echo $eagle->migrate('Jan'); ?></p>
            <p>Albatros : <?php echo $albatros->migrate('Jul'); ?></p>
        </section>
    </div>
</body>

</html>