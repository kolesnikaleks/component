<?php

defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach ($this->items as $i => $item):
    $link = JRoute::_('index.php?option=com_comparison&task=comparison.edit&id=' . $item->id);?>
    <tr class="<?php echo $i % 2; ?>" >
        <td>
            <?php echo $item->id; ?>
        </td>
        <td >
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>

        <td >
<a href="<?php echo $link ?>">
            <?php echo $item->name; ?>
        </a>
        </td>

        <td >
            <?php echo $item->title; ?>
        </td>
        <td >
            <?php echo $item->status; ?>
        </td>



    </tr>
<?php endforeach; ?>
