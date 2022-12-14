<!-- Nama : Fisma Meividianugraha Subani
     NIM  : 21091397017 -->

<?php 
    require_once '017_fisma_praktikum6_no1.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center"><strong><u>Soal No.1</u></strong></h4>
                <br><br>
                <b><?= $truck->getMaxLoad() . ' kg'; ?> <br></b>
                <br>
                <?= $truck->addBox(5000) . ' kg'; ?> <br>
                <?= $truck->addBox(6000) . ' kg'; ?> <br>
                <?= $truck->addBox(9000) . ' kg'; ?> <br>
               
                    <?php 
                        echo "Jadi, Butuh Bahan Bakar sebanyak " . $truck->calcFuelNeeds() . ' Liter'. '<br>';
                    ?>
                <br>
                <hr>
                <br>
                <b><?= $riverBarge->getMaxLoad() . ' kg'; ?> <br></b>
                <br>
                <?= $riverBarge->addBox(7000) . ' kg'; ?> <br>
                <?= $riverBarge->addBox(8000) . ' kg'; ?> <br>
                <?= $riverBarge->addBox(10000) . ' kg'; ?> <br>

                    <?php 
                        echo "Jadi, Butuh Bahan Bakar sebanyak " . $riverBarge->calcFuelNeeds() . ' Liter';
                    ?>
            </div>
        </div>
    </div>
</body>

</html>