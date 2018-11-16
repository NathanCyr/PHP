<?php
$urlToRestApi = $this->Url->build('/api/cars', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Cars/index', ['block' => 'scriptBottom']);
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">

    <title>Crud PHP Ajax Example</title>
</head>
<body>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Pages
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
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
</div>
<div class="container">
    <div class="row">
        <div class="panel panel-default cars-content">
            <div class="panel-heading">Cars <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Car</h2>
                <form class="form" id="carForm">
                <?php
            echo $this->Form->control('car_manufacturer_code');
            echo $this->Form->control('car_year_of_manufacture');
            echo $this->Form->control('model');
            echo $this->Form->control('other_car_details');
        ?>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="carAction('add')">Add Car</a>
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Car</h2>
                <form class="form" id="carForm">
                <?php
            echo $this->Form->control('car_manufacturer_code', ['id' => 'car_manufacturer_codeEdit']);
            echo $this->Form->control('car_year_of_manufacture', ['id' => 'car_year_of_manufactureEdit']);
            echo $this->Form->control('model', ['id' => 'modelEdit']);
            echo $this->Form->control('other_car_details', ['id' => 'other_car_detailsEdit']);
        ?>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="carAction('edit')">Update Car</a>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Model</th>
                </tr>
                </thead>
                <tbody id="carData">
                <?php
                foreach ($cars as $car):
                    ?>
                    <tr>
                        <td><?php echo $car['id']; ?></td>
                        <td><?php echo $car['model']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editCar('<?php echo $car['id']; ?>')"></a>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? carAction('delete', '<?php echo $car['id']; ?>') : false;"></a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<?= $this->fetch('scriptLibraries') ?>
<?= $this->fetch('script'); ?>
<?= $this->fetch('scriptBottom') ?>
</html>
