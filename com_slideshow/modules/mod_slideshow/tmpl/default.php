<style src="media://com_slideshow/css/mod_slideshow.css" />
<script src="media://com_slideshow/js/mod_slideshow.js" />

<div class="mod_slideshow">
	<div class="slides clearfix">
		<? for ($i = 0; $i < 4; $i++): ?>
		<div class="panel"><div><div>
			<? foreach($slides as $slide): ?>
			<div class="image">
				<img
					src="/media/com_slideshow/uploads/slides/<?= $slide->image; ?>"
					alt="<?= $slide->title ?>" />
			</div>
			<? endforeach; ?>
		</div></div></div>
		<? endfor; ?>
	</div>

	<div class="thumbs">
		<div class="thumb"></div>
	</div>
</div>