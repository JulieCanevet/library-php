<?php        
        if(isset($users)){
        	foreach ($users as $key => $value) {
        ?>
        <h3><?php echo $value['name'] ?></h3>
        <h3><?php echo $value['city'] ?></h3>

        <?php }} ?>