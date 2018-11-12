<?php
$urlToRestApi = $this->Url->build('/api/cars', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Cars/index', ['block' => 'scriptBottom']);
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
            echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="carAction('add')">Add Car</a>
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Car</h2>
                <form class="form" id="carForm">
                <?php
            echo $this->Form->control('car_manufacturer_code');
            echo $this->Form->control('car_year_of_manufacture');
            echo $this->Form->control('model');
            echo $this->Form->control('other_car_details');
            echo $this->Form->control('files._ids', ['options' => $files]);
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
