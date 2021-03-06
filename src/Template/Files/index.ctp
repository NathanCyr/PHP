<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $files
 */
$loguser = $this->request->session()->read('Auth.User');
echo $this->Html->css('dropzone');
echo $this->Html->script('dropzone', ['block' => 'scriptLibraries']);

$urldragdropIndex = $this->Url->build([
    "controller" => "Files",
    "action" => "index"
        ]);
echo $this->Html->scriptBlock('var urldragdropIndex = "' . $urldragdropIndex . '";', ['block' => true]);
echo $this->Html->script('dragdropIndex', ['block' => 'scriptBottom']);
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
<div class="files index large-9 medium-8 columns content">
    <h3><?= __('Files') ?></h3>
	    <div class="image_upload_div">
        <?php  
			echo $this->Form->create('image',
			array('url'=>array('action'=>'add'),
			'method'=>'post',
			'id'=>'my-awesome-dropzone',
			'class'=>'dropzone',
			'type'=>'file',
            'autocomplete'=>'off'));
            $this->Form->unlockField('file');
		?>
                            
        <?php echo $this->Form->end();?>
        </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= __('Preview') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
                <tr>
                    <td><?= $this->Number->format($file->id) ?></td>
                    <td><?= h($file->name) ?></td>
                    <td>
                        <?php
                        echo $this->Html->image($file->path . $file->name, [
                            "alt" => $file->name,
                            "width" => "220px",
                            "height" => "150px",
                            'url' => ['action' => 'view', $file->id]
                        ]);
                        ?>
                    </td>
                    <td><?= h($file->created) ?></td>
                    <td><?= h($file->modified) ?></td>
                    <td><?= h($file->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $file->id]) ?>
						<?php
		if($loguser['role']=='admin'){
		?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $file->id]) ?>
    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]) ?>
	<?php
		}
		?>
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


