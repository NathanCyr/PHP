<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Part $part
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Part'), ['action' => 'edit', $part->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Part'), ['action' => 'delete', $part->id], ['confirm' => __('Are you sure you want to delete # {0}?', $part->id)]) ?> </li>
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
<div class="parts view large-9 medium-8 columns content">
    <h3><?= h($part->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Car') ?></th>
            <td><?= $part->has('car') ? $this->Html->link($part->car->id, ['controller' => 'Cars', 'action' => 'view', $part->car->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier') ?></th>
            <td><?= $part->has('supplier') ? $this->Html->link($part->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $part->supplier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Part Name') ?></th>
            <td><?= h($part->part_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($part->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Part Id') ?></th>
            <td><?= $this->Number->format($part->parent_part_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Part Level Code') ?></th>
            <td><?= $this->Number->format($part->part_level_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Part Manufacturer Code') ?></th>
            <td><?= $this->Number->format($part->part_manufacturer_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Part Type Code') ?></th>
            <td><?= $this->Number->format($part->part_type_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($part->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($part->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($part->modified) ?></td>
        </tr>
    </table>
</div>
