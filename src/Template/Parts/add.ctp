<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Part $part
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parts'), ['controller' => 'Parts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Part'), ['controller' => 'Parts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parts form large-9 medium-8 columns content">
    <?= $this->Form->create($part) ?>
    <fieldset>
        <legend><?= __('Add Part') ?></legend>
        <?php
            echo $this->Form->control('car_id', ['options' => $cars]);
            echo $this->Form->control('parent_part_id');
            echo $this->Form->control('part_level_code');
            echo $this->Form->control('part_manufacturer_code');
            echo $this->Form->control('part_type_code');
            echo $this->Form->control('supplier_id', ['options' => $suppliers]);
            echo $this->Form->control('part_name');
            echo $this->Form->control('weight');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
