<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parts'), ['controller' => 'Parts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Part'), ['controller' => 'Parts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<body>
<div class="users form large-9 medium-8 columns content">
<h2>Nathan Cyr</h2>
<p>420-5B7-MO</p>
<p>Automne 2018</p>
<p>Collège Montmorency</p>
<a href="https://github.com/NathanCyr/PHP">Lien github du projet</a>

<h3>Intérêt de ce type de prototype d'application</h3>
<p>Ce site web sert à gérer un inventaire de voitures accessible à tous. En utilisant un système d'authentification et d'autorisations, ce site permet aux clients de regarder les voitures en inventaire<br/>
et aux administrateurs (gestionnaires du magasin) de modifier l'inventaire (ajouter ou enlever des voitures). Il est aussi possible d'uploader des images pour les différents voitures présentes.<br/>
Avec plusieurs améliorations, ce site pourrait servir à des entreprises d'encans ou à des vendeurs de voitures, tant usagées que neuves.</p>

<h3>Visiteurs</h3>

 <p>Les visiteurs peuvent seulement voir les listes d'utilisateurs, de voitures et de fichiers sans rien pouvoir modifier.</p>
 
<h3>Utilisateurs réguliers (user:test@test.ca pass:test)</h3>

	<p>Mêmes autorisations que les visiteurs</p>
	
<h3>Super-Utilisateurs (user:super@super.com pass:super)</h3>
	<p>Mêmes autorisations qu'un utilisateur régulier et un visiteur, en plus de pouvoir editer et effacer les voitures, utilisateurs, et les fichiers</p>
	
<h3>Administrateurs (user:admin@admin.com pass:admin)</h3>
	<p>Tous les droits</p>

<h3>Code Coverage</h3>
<a href="http://localhost/Cyr_Nathan_TP2/webroot/coverage/index.html">Cliquez ici</a>

<h3>TP2</h3>
<p>Vous pouvez maintenant ajouter, modifier et effacer une voiture à l'aide d'une OnePageApp créée à l'aide du plugin CRUD. Il y a aussi quelques tests unitaires d'écrits avec PHPUnit ainsi qu'un 
lien menant à la couverture de code faîtes par ledit plugin. Il y a maintenant un menu déroulant pour les vues du OnePageApp. Vous pouvez aussi générer une vue en tant que fichier PDF grâce au plugin
CakePdf.</p>

<h3>TP3</h3>
<p>Pour avoir accès à toutes les fonctionnalités du site web, il est préférable de se connecter en tant qu'administrateur.<br/>
Lorsque connecté, vous êtes redirigé vers l'index des voitures. Vous pouvez voir en haut à gauche une option de "login". Celle-ci est sécurisée à l'aide de tokens JWT. Vous pouvez vous connectez en utilisant le username et le mot de passe admin (admin et admin). N'ouliez pas de cocher le captcha.<br/>
Par la suite, vous avez l'option modify ou logout dans la même fenêtre. Vous pouvez donc choisir de soit modifier votre mot de passe ou bien vous déconnecter du compte avec les tokens.<br/>
Les listes liées par interface angularJS se retrouvent dans parts/add, ou vous devez choisir un pays et une province pour la pièce créée.<br/>
Le monopage en CRUD se retrouve, de son côté, dans /cars, avec une interface beaucoup plus simplifiée par angularJS.<br/>
Finalement, l'option de glisser-deposer se retrouve dans /files. Vous n'avez qu'à glisser une image dans la section réservée à cette fonction et la page s'occupera ensuite de se mettre à jour avec la nouvelle image inclue dans la base de donnée.</p>


<h3>Diagramme BD original</h3>
<?php echo $this->Html->image('bdOriginal.png', ['alt' => 'Base de donnée du site original']); ?>

<h3>Diagramme BD personnelle</h3>
<?php echo $this->Html->image('bdPerso.png', ['alt' => 'Base de donnée de mon site']); ?>

</div>
</body>