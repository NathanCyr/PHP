<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefPartManufacturer $refPartManufacturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ref Part Manufacturer'), ['action' => 'edit', $refPartManufacturer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ref Part Manufacturer'), ['action' => 'delete', $refPartManufacturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refPartManufacturer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ref Part Manufacturers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ref Part Manufacturer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="refPartManufacturers view large-9 medium-8 columns content">
    <h3><?= h($refPartManufacturer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Part Manufacturer Name') ?></th>
            <td><?= h($refPartManufacturer->part_manufacturer_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($refPartManufacturer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($refPartManufacturer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($refPartManufacturer->modified) ?></td>
        </tr>
    </table>
</div>
