<?php

defined('_JEXEC') or die;

// Загружаем тултипы.
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_comparison'); ?>" method="post" name="adminForm"
      id="adminForm">
    <div class="table-responsive">
        <table class="adminlist table">
            <thead><?php echo $this->loadTemplate('head'); ?></thead>
            <tbody><?php echo $this->loadTemplate('body'); ?></tbody>
            <tfoot><?php echo $this->loadTemplate('foot'); ?></tfoot>
        </table>
    </div>
    <div>
        <input type="hidden" name="task" value=""/>
        <input type="hidden" name="boxchecked" value="0"/>
        <?php echo JHtml::_('form.token'); ?>
    </div>

</form>