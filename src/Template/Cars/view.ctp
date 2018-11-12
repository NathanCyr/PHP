<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?> </li>
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
<div class="cars view large-9 medium-8 columns content">
    <h3><?= h($car->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($car->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Car Details') ?></th>
            <td><?= h($car->other_car_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($car->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Manufacturer Code') ?></th>
            <td><?= $this->Number->format($car->car_manufacturer_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Year Of Manufacture') ?></th>
            <td><?= $this->Number->format($car->car_year_of_manufacture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($car->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($car->modified) ?></td>
        </tr>
    </table>
    <div class="related">
            <h4><?= __('Related Files') ?></h4>
            <?php if (!empty($author->files)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>
                        <th scope="col"><?= __('Image') ?></th>
                   </tr>
                    <?php foreach ($author->files as $files): ?>
                        <tr>
                            <td>
                                <?php
                                echo $this->Html->image($files->path . $files->name, [
                                    "alt" => $files->name,
                                ]);
                                ?>
                            </td>
                        </tr>
                <?php endforeach; ?>
                </table>
    		<?php endif; ?>
        </div>
    <div class="related">
        <h4><?= __('Related Parts') ?></h4>
        <?php if (!empty($car->parts)): ?>
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
            <?php foreach ($car->parts as $parts): ?>
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
