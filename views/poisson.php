<?php 
require '_head.php'; 
require '_navbar.php';

?>
    <div class="container">
        <section>
            <h1>Fishes : Playground </h1>
            <h3>Identity of the fishes :</h3>
            <p>Guppy : <?php echo $this->$guppito->identify(); ?></p>
            <p>Gold Fish : <?php echo $this->$redFish->identify(); ?></p>
            <p>Shark : <?php echo $this->$shark->identify(); ?></p>
            <h3>When they are afraid, what will they do :</h3>
            <p>Guppy : <?php echo $this->$guppito->flee(); ?></p>
            <p>Gold Fish : <?php echo $this->$redFish->flee(); ?></p>
            <p>Shark : <?php echo $this->$shark->flee(); ?></p>
            <h3>What do they eat ? :</h3>
            <p>Guppy : <?php echo $this->$guppito->eat(); ?></p>
            <p>Gold Fish : <?php echo $this->$redFish->eat(); ?></p>
            <p>Shark : <?php echo $this->$shark->eat(); ?></p>
        </section>
    </div>
</body>

</html>