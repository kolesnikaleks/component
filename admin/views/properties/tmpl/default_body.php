<?php

defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach ($this->itemsis as $i => $item):
    $link = JRoute::_('index.php?option=com_comparison&task=property.edit&id=' . $item->id); ?>
    <tr class="<?php echo $i % 2; ?>" >
        <td>
            <?php echo $item->id; ?>
        </td>
        <td >
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>

        <td >
            <a href="<?php echo $link ?>">
                <?php echo $item->prop_name; ?>
            </a>
        </td>
        <td >
            <?php echo $item->value; ?>
        </td>
        <td >
            <?php echo $item->description; ?>
        </td>

        <td >
            <?php echo $item->title; ?>
        </td>

        
    </tr>
<?php endforeach; ?>
