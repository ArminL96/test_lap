<?php
    require_once ('private/php/includes.php');

    $stmt = $pdo->query("SELECT * FROM computer");
    $computer = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    if(!empty($computer)) {
        foreach ($computer as $c):?>      
                <div class="card">
                    <img class="card-img-top" src="public/images/pc.png">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $c["name"]; ?></h5>
                    <p class="card-text"><?php echo $c["ram"]; ?></p>
                    <p class="card-text"><?php echo $c["storage"]."GB"; ?></p>
                    <p class="card-text"><?php echo $c["base_price"]."€"; ?></p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
        <?php 
        endforeach;
    }
?>