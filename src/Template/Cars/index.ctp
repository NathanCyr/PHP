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
	<html ng-app="app">
		<head>
			<meta charset="UTF-8">
			<title>Cars index</title>
		</head>
		<body>
		<div ng-controller = "usersCtrl">

<div id="logDiv" style="margin: 10px 0 20px 0;"><a href="javascript:void(0);" class="glyphicon glyphicon-log-in" id="login-btn" onclick="javascript:$('#loginForm').slideToggle();">Login</a></div>

<div class="none formData" id="loginForm">
	<form class="form" enctype='application/json'>
		<div class="form-group">
			<label>Username</label>
			<input ng-model="username" type="text" class="form-control" id="username" name="username" style="width: 250px" />
			<label>Password</label>
			<input ng-model="password" type="password" class="form-control" id="password" name="password"  style="width: 250px"/>
			<div id="TP3"></div> 
			<p style="color:red;">{{ captcha_status }}</p>
		</div>
		<a href="javascript:void(0);" class="btn btn-warning" onclick="$('#loginForm').slideUp(); emptyInput();">Cancel</a>
		<a href="javascript:void(0);" class="btn btn-success" ng-click="login()">Submit</a>
	</form>
</div>

<div class="panel-body none formData" id="changeForm">
	<form class="form" enctype='application/json'>
		<div class="form-group">
			<label>New password</label>
			<input ng-model="newPassword" type="password" class="form-control" id="form-password" name="form-password" style="width: 250px" />
		</div>
		<a href="javascript:void(0);" class="btn btn-warning" onclick="$('#changeForm').slideUp(); emptyInput();">Cancel</a>
		<a href="javascript:void(0);" class="btn btn-success" ng-click="changePassword()">Submit</a>
		<a href="javascript:void(0);" class="btn btn-warning" ng-click="logout()">Logout</a>
	</form>
</div>
<br>
<div>
	<p style="color: green;">{{messageLogin}}</p>
	<p style="color: red;">{{errorLogin}}</p>
</div>
<br>

</div>
			<div ng-controller="CarCRUDController">
				<table>
					<tr>
						<td width="100">ID:</td>
						<td><input type="text" id="id" ng-model="cars.id" /></td>
					</tr>
					<tr>
						<td width="100">Model:</td>
						<td><input type="text" id="model" ng-model="cars.model" /></td>
					</tr>
					<tr>
						<td width="100">Car manufacturer code:</td>
						<td><input type="text" id="car_manufacturer_code" ng-model="cars.manufacturerCode" /></td>
					</tr>
					<tr>
						<td width="100">Car year of manufacture:</td>
						<td><input type="text" id="car_year_of_manufacture" ng-model="cars.yearManufacture" /></td>
					</tr>

				</table>
				<br /> <br /> 
				<a ng-click="updateCar(cars.id,cars.model,cars.manufacturerCode,cars.yearManufacture)">Update car</a> 
				<a ng-click="addCar(cars.model,cars.manufacturerCode,cars.yearManufacture)">Add car</a> 
			<br /> <br />
			<p style="color: green">{{message}}</p>
			<p style="color: red">{{errorMessage}}</p>
			 
			<table class="table table-striped">
							<thead>
								<tr>
									<th>Id</th>
									<th>Model</th>
									<th>Action</th>
								</tr>
							</thead>
										<tr ng-repeat="cars in car">
											<td>{{cars.id}}</td>
											<td>{{cars.model}}</td>
											
											<td>
												<a href="javascript:void(0);" class="glyphicon glyphicon-edit" ng-click="getCar(cars.id)"></a>
												<a href="javascript:void(0);" class="glyphicon glyphicon-trash" ng-click="deleteCar(cars.id)"></a>
											</td>
										</tr>
						</table>
					   
			</div>
		</body>
	</html>