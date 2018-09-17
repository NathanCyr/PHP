<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefPartManufacturer[]|\Cake\Collection\CollectionInterface $refPartManufacturers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ref Part Manufacturer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="refPartManufacturers index large-9 medium-8 columns content">
    <h3><?= __('Ref Part Manufacturers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('part_manufacturer_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($refPartManufacturers as $refPartManufacturer): ?>
            <tr>
                <td><?= $this->Number->format($refPartManufacturer->id) ?></td>
                <td><?= h($refPartManufacturer->part_manufacturer_name) ?></td>
                <td><?= h($refPartManufacturer->created) ?></td>
                <td><?= h($refPartManufacturer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $refPartManufacturer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $refPartManufacturer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $refPartManufacturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refPartManufacturer->id)]) ?>
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
