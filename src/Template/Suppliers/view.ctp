<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier $supplier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supplier'), ['action' => 'edit', $supplier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supplier'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parts'), ['controller' => 'Parts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Part'), ['controller' => 'Parts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="suppliers view large-9 medium-8 columns content">
    <h3><?= h($supplier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supplier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier Details') ?></th>
            <td><?= $this->Number->format($supplier->supplier_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($supplier->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($supplier->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Parts') ?></h4>
        <?php if (!empty($supplier->parts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Car Id') ?></th>
                <th scope="col"><?= __('Parent Part Id') ?></th>
                <th scope="col"><?= __('Part Level Code') ?></th>
                <th scope="col"><?= __('Part Manufacturer Code') ?></th>
                <th scope="col"><?= __('Part Type Code') ?></th>
                <th scope="col"><?= __('Supplier Id') ?></th>
                <th scope="col"><?= __('Part Name') ?></th>
                <th scope="col"><?= __('Weight') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($supplier->parts as $parts): ?>
            <tr>
                <td><?= h($parts->id) ?></td>
                <td><?= h($parts->car_id) ?></td>
                <td><?= h($parts->parent_part_id) ?></td>
                <td><?= h($parts->part_level_code) ?></td>
                <td><?= h($parts->part_manufacturer_code) ?></td>
                <td><?= h($parts->part_type_code) ?></td>
                <td><?= h($parts->supplier_id) ?></td>
                <td><?= h($parts->part_name) ?></td>
                <td><?= h($parts->weight) ?></td>
                <td><?= h($parts->created) ?></td>
                <td><?= h($parts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Parts', 'action' => 'view', $parts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Parts', 'action' => 'edit', $parts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Parts', 'action' => 'delete', $parts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
