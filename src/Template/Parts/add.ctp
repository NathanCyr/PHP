<?php
 $urlToLinkedListFilter = $this->Url->build([
    "controller" => "Countries",
    "action" => "getCountries",
    "_ext" => "json"
        ]);
 echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
 echo $this->Html->script('Parts/add', ['block' => 'scriptBottom']);
 
$urlToEditorsAutocompleteJson = $this->Url->build([
    "controller" => "parts",
    "action" => "findParts",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToEditorsAutocompleteJson . '";', ['block' => true]);
echo $this->Html->script('Parts/autocomplete', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Parts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parts form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="countriesController">
    <?= $this->Form->create($part) ?>
    <fieldset>
        <legend><?= __('Add Part') ?></legend>
        <?php
            echo $this->Form->control('part_level_code');
            echo $this->Form->control('part_manufacturer_code');
            echo $this->Form->control('part_type_code');
            echo $this->Form->control('part_name');
            echo $this->Form->control('weight');
        ?>
        <div>
			Countries: 
            <select name="Country_id"
                    id="country-id" 
                    ng-model="country" 
                    ng-options="country.name for country in countries track by country.id"
                    >
                <option value=''>Select</option>
            </select>
		</div>
		<div>
            Provinces: 
            <select name="province_id"
                    id="province-id" 
                    ng-disabled="!country" 
                    ng-model="province"
                    ng-options="province.name for province in country.provinces track by province.id"
                    >
                <option value=''>Select</option>
            </select>
			<pre ng-show='countries'>{{ countries | json }}</pre>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
