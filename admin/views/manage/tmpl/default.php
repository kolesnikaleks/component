<?php

defined('_JEXEC') or die;

// Загружаем тултипы.
JHtml::_('behavior.tooltip');
?>
<h3 class="text-center">Перечень Items</h3>
<form method="post" name="adminForm" id="adminForm">
    <div class="table-responsive">
        <table class="adminlist table table-hover ">

            <!-- Добавляем Item  -->
            <tr>
                <th style="border-right: 1px solid gainsboro;">
                    <h3>Properties</h3>
                </th>
                <?php foreach ($this->items as $item):
                    $link = JRoute::_('index.php?option=com_comparison&layout=comparison.edit&id=' . $item->id); ?>

                    <th style="padding-top:18px; ">
                        <a href="<?php echo $link ?>">
                            <?php echo $item->name; ?>
                        </a>
                    </th>
                <?php endforeach; ?>
            </tr>
            <!-- Добавляем Properties  -->
            <?php foreach ($this->property as $prop):; ?>
                <tr>
                    <td>
                        <?php echo $prop->prop_name; ?>
                    </td>


                    <?php foreach ($this->items as $item): ?>
                        <td>
                            <input type="text">
                        </td>
                    <?php endforeach; ?>

                </tr>
            <?php endforeach; ?>

            <tr>
                <td colspan="7"><?php echo $this->pagination->getListFooter(); ?></td>
            </tr>
        </table>
    </div>
    <div>
        <input type="hidden" name="task" value=""/>
        <input type="hidden" name="boxchecked" value="0"/>
        <?php echo JHtml::_('form.token'); ?>
    </div>

</form>
