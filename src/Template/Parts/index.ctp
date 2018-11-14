<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Part[]|\Cake\Collection\CollectionInterface $parts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Part'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parts index large-9 medium-8 columns content">
    <h3><?= __('Parts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('part_level_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('part_manufacturer_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('part_type_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('part_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parts as $part): ?>
            <tr>
                <td><?= $this->Number->format($part->id) ?></td>
                <td><?= $part->has('car') ? $this->Html->link($part->car->id, ['controller' => 'Cars', 'action' => 'view', $part->car->id]) : '' ?></td>
                <td><?= $this->Number->format($part->part_level_code) ?></td>
                <td><?= $this->Number->format($part->part_manufacturer_code) ?></td>
                <td><?= $this->Number->format($part->part_type_code) ?></td>
                <td><?= $part->has('supplier') ? $this->Html->link($part->supplier->id, ['controller' => 'Suppliers', 'action' => 'view', $part->supplier->id]) : '' ?></td>
                <td><?= h($part->part_name) ?></td>
                <td><?= $this->Number->format($part->weight) ?></td>
                <td><?= h($part->created) ?></td>
                <td><?= h($part->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $part->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $part->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $part->id], ['confirm' => __('Are you sure you want to delete # {0}?', $part->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
