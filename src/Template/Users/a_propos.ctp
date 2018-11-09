<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
    </ul>
</nav>
<body>
<div class="users form large-9 medium-8 columns content">
<h2>Nathan Cyr</h2>
<p>420-5B7-MO</p>
<p>Automne 2018</p>
<p>Collège Montmorency</p>
<h3>Visiteurs</h3>

 <p>Les visiteurs peuvent seulement voir les listes d'utilisateurs, de voitures et de fichiers sans rien pouvoir modifier.</p>
 
<h3>Utilisateurs réguliers (user:test@test.ca pass:test)</h3>

	<p>Mêmes autorisations que les visiteurs</p>
	
<h3>Super-Utilisateurs (user:super@super.com pass:super)</h3>
	<p>Mêmes autorisations qu'un utilisateur régulier et un visiteur, en plus de pouvoir editer et effacer les voitures, utilisateurs, et les fichiers</p>
	
<h3>Administrateurs (user:admin@admin.com pass:admin)</h3>
	<p>Tous les droits</p>

<h3>Diagramme BD original</h3>
<?php echo $this->Html->image('bdOriginal.png', ['alt' => 'Base de donnée du site original']); ?>

<h3>Diagramme BD personnelle</h3>
<?php echo $this->Html->image('bdPerso.png', ['alt' => 'Base de donnée de mon site']); ?>

</div>
</body>