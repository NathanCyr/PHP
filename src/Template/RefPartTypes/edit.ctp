<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RefPartType $refPartType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $refPartType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $refPartType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ref Part Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="refPartTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($refPartType) ?>
    <fieldset>
        <legend><?= __('Edit Ref Part Type') ?></legend>
        <?php
            echo $this->Form->control('part_type_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
