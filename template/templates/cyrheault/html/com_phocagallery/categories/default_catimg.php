<?php
defined('_JEXEC') or die('Restricted access');
echo "\n\n";
for ($i = 0; $i < $this->tmpl['countcategories']; $i++) {
	if ( (int)$this->tmpl['categoriescolumns'] == 1 ) {
		echo '<div class="gallery-block" border="0">'."\n";
	} else {
		$float = 0;
		foreach ($this->tmpl['begin'] as $k => $v) {
			if ($i == $v) {
				$float = 1;
			}
		}
		if ($float == 1) {		
			echo '<div style="'.$this->tmpl['fixedwidthstyle1'].'" class="pg-cats-box-float"><div>'."\n";
		}
	}

	echo '<div>'."\n";		
	echo '<div align="center" valign="middle" style="text-align:center;"><div class="pg-imgbg"><a href="'.$this->categories[$i]->link.'">';

	if (isset($this->categories[$i]->extpic) && $this->categories[$i]->extpic) {
		$correctImageRes = PhocaGalleryPicasa::correctSizeWithRate($this->categories[$i]->extw, $this->categories[$i]->exth, $this->tmpl['picasa_correct_width'], $this->tmpl['picasa_correct_height']);
		echo JHtml::_( 'image', $this->categories[$i]->linkthumbnailpath, str_replace('&raquo;', '-',$this->categories[$i]->title), array('width' => $correctImageRes['width'], 'height' => $correctImageRes['height'], 'style' => ''));
	} else {
		echo JHtml::_( 'image', $this->categories[$i]->linkthumbnailpath, str_replace('&raquo;','-',$this->categories[$i]->title),array('style' => ''));
	}
	
	echo '</a></div></div>';
	echo '<div><a href="'.$this->categories[$i]->link.'">'.$this->categories[$i]->title.'</a>&nbsp;';
	
	if ($this->categories[$i]->numlinks > 0) {echo '<span class="small">('.$this->categories[$i]->numlinks.')</span>';}
	
	echo '</div>';
	echo '</div>'."\n";
	
	if ( (int)$this->tmpl['categoriescolumns'] == 1 ) {
		echo '</div>'."\n";
	} else {
		if ($i == $this->tmpl['endfloat']) {
			echo '</div></div><div style="clear:both"></div>'."\n";
		} else {
			$float = 0;
			foreach ($this->tmpl['end'] as $k => $v)
			{
				if ($i == $v) {
					$float = 1;
				}
			}
			if ($float == 1) {		
				echo '</div></div>'."\n";
			}
		}
	}
}
echo "\n";
?>