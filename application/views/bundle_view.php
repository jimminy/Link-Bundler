<div class='content'>	
	<?php foreach($links as $link): ?>
	<?php echo"<a href='$link' rel='nofollow'>$link</a><br/>"; ?>
	<?php endforeach; ?>
	<input type="button" onclick="linkOpener()" value="Open All Links">
</div>