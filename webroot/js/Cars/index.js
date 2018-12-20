var app = angular.module('app', []);

app.controller('usersCtrl', function ($scope, $compile, $http) {

    $scope.login = function () {

        var req = {
            method: 'POST',
            url: 'api/users/token',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            data: {username: $scope.username, password: $scope.password}
        }
        // fields in key-value pairs
        $http(req)
			.success(function (jsonData, status, headers, config) {

                localStorage.setItem('token', jsonData.data.token);
                localStorage.setItem('user_id', jsonData.data.id);


                // Switch button for Logout
                $('#logDiv').html(
                    $compile('<a href="javascript:void(0);" class="glyphicon glyphicon-log-out" id="login-btn" onclick="javascript:$(\'#changeForm\').slideToggle();">Logout/Modify</a>')($scope)
                );


                $('#loginForm').slideUp();

                //$scope.messageLogin = 'Welcome!';
                $scope.errorLogin = '';
            })

            .error(function (data, status, headers, config) {
                $scope.messageLogin = '';
                $scope.errorLogin = 'Invalid credentials';
            });

    }

    $scope.logout = function () {
        localStorage.setItem('token', "no token");

        $('#logDiv').html(
            $compile('<a href="javascript:void(0);" class="glyphicon glyphicon-log-in" id="login-btn" onclick="javascript:$(\'#loginForm\').slideToggle();">Login</a>')($scope)
        );

        $('#changeForm').slideUp();
        $scope.messageLogin = 'You have logged out';
        $scope.errorLogin = '';

    }
    $scope.changePassword = function () {
        var req = {
            method: 'PUT',
            url: 'api/users/' + localStorage.getItem("user_id"),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem("token")
            },
            data: {'password': $scope.newPassword}
        }
        $http(req)
            .success(function (response) {
                $('#changeForm').slideUp();
                $scope.messageLogin = 'Password successfully changed! ';
            })
            .error(function (response) {
                $scope.errorLogin = 'Impossible to change the password!';

            });
    };
});

app.controller('CarCRUDController', ['$scope','CarCRUDService', function ($scope,CarCRUDService) {
	  
    $scope.updateCar = function () {
        CarCRUDService.updateCar($scope.car.id,$scope.car.model)
          .then(function success(response){
              $scope.message = 'Car data updated!';
              $scope.errorMessage = '';
              $scope.car.id = '';
              $scope.car.model = '';
              $scope.getAllCars();
          },
          function error(response){
              $scope.errorMessage = 'Error updating Car Type!';
              $scope.message = '';
          });
    }
    
    $scope.getCar = function ($id) {

        CarCRUDService.getCar($id)
          .then(function success(response){
              $scope.car = response.data.data;
              $scope.car.id = $id;
              $scope.message='';
              $scope.errorMessage = '';
              $scope.getAllCars();
              
          },
          function error (response ){
              $scope.message = '';
              if (response.status === 404){
                  $scope.errorMessage = 'Car not found!';
              }
              else {
                  $scope.errorMessage = "Error getting Car!";
              }
          });
    }
    
    $scope.addCar = function () {
        if ($scope.car != null && $scope.car.model) {
            CarCRUDService.addCar($scope.car.model)
              .then (function success(response){
                  $scope.message = 'Car added!';
                  $scope.errorMessage = '';
                  $scope.car.id = '';
                  $scope.car.model = '';
                  $scope.car.manufacturerCode = '';
                  $scope.car.yearManufacture = '';
                  $scope.getAllCars();
              },
              function error(response){
                  $scope.errorMessage = 'Error adding Car!';
                  $scope.message = '';
            });
        }
        else {
            $scope.errorMessage = 'Please enter a model!';
            $scope.message = '';
        }
    }
    
    $scope.deleteCar = function ($id) {
        CarCRUDService.deleteCar($id)
          .then (function success(response){
              $scope.message = 'Car deleted!';
              $scope.car = null;
              $scope.errorMessage='';
              $scope.getAllCars();
          },
          function error(response){
              $scope.errorMessage = 'Error deleting Car!';
              $scope.message='';
          })
    }
    
    $scope.getAllCars = function () {
        CarCRUDService.getAllCars()
          .then(function success(response){
              $scope.car = response.data.data;
              $scope.message='';
              $scope.errorMessage = '';
          },
          function error (response ){
              $scope.message='';
              $scope.errorMessage = 'Error getting Cars!';
          });
    }
    $scope.getAllCars();
}]);

app.service('CarCRUDService',['$http', function ($http) {
	
    this.getCar = function getCar(carId){
        return $http({
          method: 'GET',
          url: urlToRestApi+'/'+carId,
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        });
	}
	
    this.addCar = function addCar(model){
        return $http({
          method: 'POST',
          url: urlToRestApi,
          data: {model:model},
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        });
    }
	
    this.deleteCar = function deleteCar(id){
        return $http({
          method: 'DELETE',
          url: urlToRestApi+'/'+id ,
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        })
    }
	
    this.updateCar = function updateCar(id,model){
        return $http({
          method: 'PATCH',
          url: urlToRestApi+'/'+id,
          data: {model:model},
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        })
    }
	
    this.getAllCars = function getAllCars(){
        return $http({
          method: 'GET',
          url: urlToRestApi,
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}

        });
    }

}]);