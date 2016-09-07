<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Builder
 * @author     neohoang <thaihtvn@gmail.com>
 * @copyright  2016 neohoang
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;


?>
<?php if ($this->item) : ?>

	<div class="item_fields">
		<table class="table">
			
		</table>
	</div>
	
	<?php
else:
	echo JText::_('COM_BUILDER_ITEM_NOT_LOADED');
endif;
