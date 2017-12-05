<article class="users">
<?php if(isset($users)){ ?>
        <h2 id="liste">Liste des utilisateurs</h2>
	<div id="users">
        <?php foreach ($users as $key => $value) { ?>
                <div class="user">
                        <h5><?php echo $value['name'] ?></h5>
                        <p><?php echo $value['city'] ?></p>
                </div>
        <?php }} ?>
        </div>
</article>