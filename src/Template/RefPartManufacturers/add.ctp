<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefPartManufacturer $refPartManufacturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ref Part Manufacturers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="refPartManufacturers form large-9 medium-8 columns content">
    <?= $this->Form->create($refPartManufacturer) ?>
    <fieldset>
        <legend><?= __('Add Ref Part Manufacturer') ?></legend>
        <?php
            echo $this->Form->control('part_manufacturer_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
