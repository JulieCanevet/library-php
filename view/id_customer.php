		<form method="post" action="index.php">
          <div class="form-group">
            <select name="edition">
            	<?php foreach ($users as $key => $value){
?>             	<option value="<?php echo $value['id_customer'] ?>"><?php echo $value['name'] ?></option>
  <?php } ?>
            </select>
           	<input type="hidden" name="id_book" value="<?php echo $_POST['id_book']?>">
            <input type="submit" value="edition">
          </div>
        </form>