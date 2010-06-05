<div class='content'>
	<?php if($entries == null): redirect("page/$prev"); ?>
	<?php else: ?>
	<?php foreach($entries as $item):?>
	<div class='items'><?php echo anchor("b/$item->id","#"). ' '. $item->body;?></div>
	<?php endforeach;?>
	<?php endif; ?>
	<?php if($next != 1): ?>
	<?php echo anchor("page/$prev", "Previous Page"); ?>
	<?php endif; ?>
	<?php if(count($entries) == 5): ?>
	<?php echo anchor("page/$next", "Next Page"); ?>
	<?php endif ?>
</div>

