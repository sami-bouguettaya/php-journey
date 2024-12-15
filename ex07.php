<?php
$select = array("ISIL1", "ISIL2", "SI1", "SI2");
?>
<label for="specialite">Choix de specialite</label>
<select name="specialite" id="specialite">
    <?php
      foreach($select as $choix){
        $sel = ($choix === "SI1")? "selected" : "";
        echo "<option value='$choix' $sel>$choix</option>" ;
      }

?>
</select>