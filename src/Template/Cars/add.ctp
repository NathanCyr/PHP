<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
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
</nav>
<div class="cars form large-9 medium-8 columns content">
    <?= $this->Form->create($car) ?>
    <fieldset>
        <legend><?= __('Add Car') ?></legend>
        <?php
            echo $this->Form->control('car_manufacturer_code');
            echo $this->Form->control('car_year_of_manufacture');
            echo $this->Form->control('model');
            echo $this->Form->control('other_car_details');
            echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
