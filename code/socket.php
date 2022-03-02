<?php
    require_once "../asset/konek/konek.php";
    $brand_id = $_POST["brand_id"];
    $result = mysqli_query($connect, "SELECT * FROM socket where brand_id = $brand_id");
?>
<option value="">Pilih Socket</option>
<?php
    while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["nama"];?></option>
<?php
    }
?>