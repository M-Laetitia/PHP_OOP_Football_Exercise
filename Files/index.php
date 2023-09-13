<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">

    <title>OOP_Football</title>

</head>


<body>
    <?php 
        spl_autoload_register(function ($class_name) {
            require $class_name . ".php";
        });


        // ^ COUNTRY:
        $france = new Country("France");
        $portugal = new Country ("Portugal");
        $argentine = new Country ("Argentine");
        $bresil = new Country ("Brésil");
        $espagne = new Country ("Espagne");
        $angleterre = new Country ("Angleterre");
        $italie = new Country ("Italie");

 
        // ^ PLAYER :
        $killianMbappe = new Player ('Killian','Mbappe', '1998-12-20', $france);
        $christianoRonaldo = new Player ('Christiano','Ronaldo', '1985-02-05', $portugal);
        $lionelMessi = new Player ('Lionel','Messi', '1987-06-24', $argentine);
        $neymarJunior = new Player ('Neymar','Junior', '1992-02-05', $bresil);
        

        // ^ TEAM :
        $psg = new Team ('PSG', '10-01-1970', $france);
        $realMadrid = new Team ('Real Madrid','10-01-1902', $espagne); // ? cela affiche 2023 alors que les autres cela fonctionne?
        $manchesterunited = new Team ('Manchester United','10-01-1878', $angleterre);
        $fcBarcelone = new Team ('FC Barcelone','10-01-1899', $espagne);
        $juventus = new Team ('Juventus','10-01-1897', $italie);
        $racingCulbStras = new Team ('Racing Club Stras','10-01-1897', $france);


        // ^ CAREER:
        $psgMbappe = new Career($psg, '10-01-2017', $killianMbappe);
        $psgMessi = new Career($psg, '10-01-2021', $lionelMessi);
        $fcbMessi = new Career($fcBarcelone, '10-01-2004', $lionelMessi);
        $rMRonaldo = new Career($realMadrid, '10-01-2009', $christianoRonaldo);
        $juventusRonaldo = new Career($juventus, '10-01-2018', $christianoRonaldo );
        $mURonaldo = new Career ($manchesterunited, '10-01-2021', $christianoRonaldo);
        $fcNeymar = new Career ($fcBarcelone, '10-01-2017', $neymarJunior);
        $psgNeymar = new Career ($psg, '10-01-2017', $neymarJunior);



    ?>


    <h1>POO FOOTBALL</h1>




    <div class="content">

       
        <div class="container content_country">
            <div class="card one"><?php echo $france->teamCountry();?></div>
            <div class="card one"><?php echo $espagne->teamCountry();?></div>
            <div class="card one"><?php echo $angleterre->teamCountry();?></div>
            <div class="card one"><?php echo $italie->teamCountry();?></div>
        </div>

        <div class="container content_team">
            <div class="card two"><?php echo $psg->teamPlayer();?></div>
            <div class="card two"><?php echo $realMadrid->teamPlayer();?></div>
            <div class="card two"><?php echo $manchesterunited->teamPlayer();?></div>
            <div class="card two"><?php echo $juventus->teamPlayer();?></div>
            <div class="card two"><?php echo $fcBarcelone->teamPlayer();?></div>
            <div class="card two"><?php echo $racingCulbStras->teamPlayer();?></div>
        </div> 
        
        <div class="container content_career">
            <div class="card three"><?php echo $killianMbappe->playerCareer();?></div>
            <div class="card three"><?php echo $christianoRonaldo->playerCareer();?></div>
            <div class="card three"><?php echo $neymarJunior->playerCareer();?></div>
            <div class="card three"><?php echo $lionelMessi->playerCareer();?></div>
        </div>


    </div>


</body>
</html>