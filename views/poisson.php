<?php 
require '_head.php'; 
require '_navbar.php';




?>
    <div class="container">
        <section>
            <h1>Fishes : Playground </h1>
            <h3>Identity of the fishes :</h3>
            <p>Guppy : <?php echo $guppito->identify(); ?></p>
            <p>Gold Fish : <?php echo $redFish->identify(); ?></p>
            <p>Shark : <?php echo $shark->identify(); ?></p>
            <h3>When they are afraid, what will they do :</h3>
            <p>Guppy : <?php echo $guppito->flee(); ?></p>
            <p>Gold Fish : <?php echo $redFish->flee(); ?></p>
            <p>Shark : <?php echo $shark->flee(); ?></p>
            <h3>What do they eat ? :</h3>
            <p>Guppy : <?php echo $guppito->eat(); ?></p>
            <p>Gold Fish : <?php echo $redFish->eat(); ?></p>
            <p>Shark : <?php echo $shark->eat(); ?></p>
        </section>
    </div>
</body>

</html>