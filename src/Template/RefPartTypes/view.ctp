<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefPartType $refPartType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ref Part Type'), ['action' => 'edit', $refPartType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ref Part Type'), ['action' => 'delete', $refPartType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $refPartType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ref Part Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ref Part Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="refPartTypes view large-9 medium-8 columns content">
    <h3><?= h($refPartType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Part Type Description') ?></th>
            <td><?= h($refPartType->part_type_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($refPartType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($refPartType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($refPartType->modified) ?></td>
        </tr>
    </table>
</div>
