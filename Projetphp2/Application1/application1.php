<?php
$colors=[
    "blue" =>"#2b0cdd",
    "rouge" =>"#ff0000",
    "jaune" =>"#d9ff00",
    "noir" =>"#080707",
];
?>

<html>
    <head>
        <title>application 1</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
       
    <div id="cadre">
        <h1>SONATEL ACADEMY</h1>
        <p>taille de la matrice carrée</p>
        <form action="" method="POST">
        <div class="tailleMatrice">
            <div class="gauche"><img src="App1/icone1.jpg" alt="" style="position :absolute"></div>
            <div >
                <input type="text" name="n" id="" class="input">
            </div>
        </div>
        <p>Select C1</p>
        <div class="selectC1"> 
        <img src="App1/icone2_3.jpg" alt="">
            <select name="c1" id="" class="couleur">
            <?php foreach ($colors as $color => $C){?>
                <option value="<?= $color?>"><?=$color?></option>
            <?php } ?>
            </select>
        </div>
        <p>Select C2</p>
        <div class="selectC2"> 
        <select name="c2" id="" class="couleur">
            <img src="App1/icone2_3.jpg" alt="" style="float: left; position: absolute; width: 20%;">
            <?php foreach ($colors as $color => $C){?>
                <option value="<?= $color?>"><?=$color?></option>
            <?php } ?>
            </select>
        </div>
        <p>Position</p>
        <div class="position"> 
        <select name="option" id="" class="couleur">
                <option value="haut">haut </option>
                <option value="bas">bas</option>
            </select>
        </div>
        <div class="annuler">
            <input type="button" class="annuler" value="annuler" name="annuler">
        </div>
        <div class="dessiner">
            <input type="submit" class="dessiner" value="dessiner" name="dessiner">
        </div>
        </form>

        <?php
   if(isset($_POST['dessiner'])){
    if(isset($_POST['n'])){
        ?>
            <table>
            <?php
             $n = $_POST['n'];
            for ($i=1; $i <=$n; $i++) {
                 ?>
                <tr>
                <?php for ($j=1; $j<=$n; $j++) { 
                    if ($i>=$j || $j==$n-($i-1)) { ?>
                        <td bgcolor=<?php echo $colors[$_POST['c1']];?> ></td>
                    <?php }
                    else { ?>
                        <td bgcolor=<?php echo $colors[$_POST['c2']];?>></td>
                   <?php }  }?>
                </tr>
               <?php } ?>

            
        </table>
   <?php

}}?>   
        </div>
        
    </body>
</html>