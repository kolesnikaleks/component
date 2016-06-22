<?php

defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach ($this->itemsis as $i => $item):
    $link = JRoute::_('index.php?option=com_comparison&task=property.edit&id=' . $item->id); ?>
    <tr class="row-fluid<?php echo $i % 2; ?>" style="border-bottom: 1px solid ">
        <td>
            <?php echo $item->id; ?>
        </td>
        <td style="padding-left: 18px;">
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>

        <td style="padding:20px 50px;">
            <a href="<?php echo $link ?>">
                <?php echo $item->prop_name; ?>
            </a>
        </td>
        <td style="padding:20px 30px;">
            <?php echo $item->value; ?>
        </td>
        <td style="padding:20px 70px;">
            <?php echo $item->description; ?>
        </td>

        <td style="padding:20px 30px;">
            <?php echo $item->title; ?>
        </td>

        
    </tr>
<?php endforeach; ?>
