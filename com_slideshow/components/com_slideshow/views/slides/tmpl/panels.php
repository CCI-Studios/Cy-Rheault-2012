
<div class="mod_slideshow">
	<div class="slides">
	<? foreach($slides as $slide): ?>
		<? for ($i = 0; $i < 4; $i++): ?>
			<div><div style="background-image: url(<?= $slide->imagePath() ?>);">
			</div></div>
		<? endfor; ?>
	<? endforeach; ?>
	</div>

	<div class="">
	<? foreach($slides as $slide): ?>
		<div></div>
	<? endforeach; ?>
	</div>
</div>