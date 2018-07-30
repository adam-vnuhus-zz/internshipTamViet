var app= angular.module("myCalApp", []);
app.controller('myCtrl', function($scope) {
	$scope.status1= true;
	$scope.status2= true;
	$scope.status3= true;
	$scope.status4= true;
	$scope.status5= true;

	$scope.clicked= function(obj) {
		$scope.status1= true;
		$scope.status2= true;
		$scope.status3= true;
		$scope.status4= true;
		$scope.status5= true;
		if (obj == 1) {
			$scope.status1= !$scope.status1;
		}
		if (obj == 2) {
			$scope.status2= !$scope.status2;
		}
		if (obj == 3) {
			$scope.status3= !$scope.status3;
		}
		if (obj == 4) {
			$scope.status4= !$scope.status4;
		}
		if (obj == 5) {
			$scope.status5= !$scope.status5;
		}
	}
});