<?php

include "conn.php";
$ID = $_GET["update_id"];
if (isset($_POST["update"])) {
    $IC = $_POST["IC"];
    $NAMA = $_POST["NAMA"];
    $HP = $_POST["HP"];
    $JANTINA = $_POST["JANTINA"];
    $result = mysqli_query(
        $con,
        "UPDATE info_pekerja SET nama_pekerja='$NAMA',no_kp='$IC', no_hp='$HP', jantina='$JANTINA' WHERE id='$ID'"
    );
 
}
?>
<link rel="stylesheet" href="style.css">
<div>
    <a  href="index.php">BACK</a>
</div>
<?php
$result = mysqli_query($con, "SELECT * FROM info_pekerja WHERE id='$ID'");
while ($res = mysqli_fetch_array($result)) {
    $NAME = $res["nama_pekerja"];
    $IC = $res["no_kp"];
    $HP = $res["no_hp"];
    $JANTINA = $res["jantina"];
}
?>
<div>
    <div>
        <h3>UPDATE MAKLUMAT <?php echo $NAME; ?></h3>
        <form method="post" enctype='multipart/form-data'>
            <div>
            <div>
                <label class="block">IC</label>
                <input maxlength="12" name="IC" type="text" value="<?php echo $IC; ?>">  
                </div>
                <div class="mt-4">
                <label class="block">Nama</label>
                <input name="NAMA" type="text"  value="<?php echo $NAME; ?>">  
                </div>
                <label class="block">HP</label>
                <input name="HP" type="text"  value="<?php echo $HP; ?>">  
                </div>
                <div class="mt-4">
                <label class="block">Jantina</label>
                <select name="JANTINA" required>
                <option disabled selected value> -- select an option -- </option>  
                <option value="Lelaki">Lelaki</option>
                  <option value="Perempuan">Perempuan</option>
      </select>  
                </div>
                <div>
                    <button  class="submit"type="submit" name="update">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>