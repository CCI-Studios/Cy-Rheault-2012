<? defined("KOOWA") or die('Nooku is not installed or enabled'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_bars/css/com_bars.css" />

<form action="<?= @route("view=slide&id={$slide->id}") ?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
	
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('Slide Details') ?></legend>
			
			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?></label>
					<input type="text" id="field_title" name="title" value="<?= $slide->title ?>" />
				</li>
			</ul>
		</fieldset>
	</div>

	<div class="width-40 fltrt">
		<fieldset class="adminform">
			<legend><?= @text('Slide Details') ?></legend>

			<ul class="adminformlist">
				<? if (!$slide->image1): ?>
					<li>
						<label for="field_image1"><?= @text('Image') ?></label>
						<input type="file" name="image_upload" />
					</li>
				<? else: ?>
					<li>	
						<?= $slide->image(); ?>
					</li>
					<li>
						<label for="field_image_delete"><?= @text('Delete Image')?></label>
						<input type="checkbox" name="image_delete" />
					</li>
				<? endif; ?>
		</fieldset>
	</div>
</form>