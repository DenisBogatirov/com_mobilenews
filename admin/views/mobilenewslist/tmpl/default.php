<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_mobilenews&view=mobilenewslist" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th><?php echo JText::_('COM_MOBILENEWS_NUM'); ?></th>
      <th>
				<?php echo JText::_('COM_MOBILENEWS_ID'); ?>
			</th>
			<th align="center">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
      <th width="10%"><?php echo JText::_('COM_MOBILENEWS_MOBILENEWSLIST_TITLE'); ?></th>
			<th width="70%">
				<?php echo JText::_('COM_MOBILENEWS_MOBILENEWSLIST_TEXT') ;?>
			</th>
			<th width="9%">
				<?php echo JText::_('COM_MOBILENEWS_IMG'); ?>
			</th>
			<th width="9%">
				<?php echo JText::_('COM_MOBILENEWS_DATE'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
						$link = JRoute::_('index.php?option=com_mobilenews&task=mobilenews.edit&id=' . $row->id);
					?>

					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
            <td align="center">
							<?php echo $row->id; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>"><?php echo $row->title; ?></a>
						</td>
            <td>
							<?php echo $row->text; ?>
						</td>
            <td>
							<img src="<?php echo substr( $row->img, 0, 4 ) === "http" ? $row->img : JURI::root() . $row->img; ?>">
						</td>
						<td align="center">
							<?php echo $row->date; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
</form>
