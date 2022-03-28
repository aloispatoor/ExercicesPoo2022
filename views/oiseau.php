<?php 
require '_head.php'; 
require '_navbar.php';

?>
<body>
    <div class="container">
        <section>
            <h1>Birds : Playground </h1>
            <h3>Identity of the birds :</h3>
            <p>Eagle : <?php echo $this->$eagle->identify(); ?></p>
            <p>Albatros : <?php echo $this->$albatros->identify(); ?></p>
            <p>Piegon : <?php echo $this->$pigeon->identify(); ?></p>
            <h3>When they are afraid, what will they do :</h3>
            <p>Eagle : <?php echo $this->$eagle->flee(); ?></p>
            <p>Albatros : <?php echo $this->$albatros->flee(); ?></p>
            <p>Piegon : <?php echo $this->$pigeon->flee(); ?></p>
            <h3>What do they eat ? :</h3>
            <p>Eagle : <?php echo $this->$eagle->eat(); ?></p>
            <p>Albatros : <?php echo $this->$albatros->eat(); ?></p>
            <p>Piegon : <?php echo $this->$pigeon->eat(); ?></p>
            <h3>Would they migrate :</h3>
            <p>Eagle : <?php echo $this->$eagle->migrate('Jan'); ?></p>
            <p>Albatros : <?php echo $this->$albatros->migrate('Jul'); ?></p>
        </section>
    </div>
</body>

</html>