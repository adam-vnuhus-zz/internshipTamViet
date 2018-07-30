var app= angular.module("myCalApp", []);
app.controller('myCtrl', function($scope) {
	$scope.expr= "";	//bt dong tren
	$scope.result= 0;
	$scope.mem= 0;	//ket qua 
	// $scope.number1= 0;	//
	// $scope.number2= 0;

	/*$scope.mul_clicked= function() {
		$scope.number1= parseFloat($scope.expr);
		$scope.result= $scope.number1;
		$scope.expr+= "x";
		
		$scope.number2= $scope.expr.slice($scope.expr.length);
	}*/
	//$scope.count= 0;
	$scope.clicked= function(val) {
		if ($scope.mem == 0) {
			$scope.expr += val;
		} else {
			$scope.expr= "";
			$scope.expr+= val;
			$scope.mem= 0;
		}
	}	

		/*if ($scope.expr == "") {
			$scope.expr= val;
		}
			else if (!isNaN(val)) {
				$scope.expr+= val;
				$scope.count= 0;
			}
			else if (isNaN(val) && $scope.count < 1) {
				$scope.expr += val;
				$scope.count++;
			}
		}*/
		
	

	$scope.AC_clicked= function() {
		$scope.expr= "";
		$scope.result= 0;
	}

	$scope.C_clicked= function() {
		$scope.expr = $scope.expr.slice(0, $scope.expr.length - 1);
	}

	$scope.eql_clicked= function() {
		if ($scope.check()== false) {
			window.alert("Wrong expression");
			$scope.mem= 1;
		} else {
			$scope.convert();
			
			$scope.result= eval($scope.expr);
			$scope.mem= 1;
		}

	}


	$scope.enter= function($event) {
		if ($event.keyCode == 13) {
			$scope.eql_clicked();
					
		}
	}

	//$scope.exprForm= /(\+|\-)?(\d+\.\d+|\d)+(((\+|\-|\*|\/)|(\*\-)|(\/\-)|(\+\-)|(\-\+)|(\*\+)|(\/\+)|(\+\+)|(\-\-))(\d+\.\d+|\d)+)?/g;
	$scope.check= function() {
	$scope.exprForm= /(\+|\-)?(\d+\.\d+|\d)+((\+|\-|\*|\/)(\+|\-)?(\d+\.\d+|\d)+)?/g;
		if (!$scope.exprForm.test($scope.expr)) {
			return false;
		} else {
			return true;
		}

	}

	$scope.convert= function() {
		while ($scope.expr.indexOf("++") > -1 || $scope.expr.indexOf("--") > -1) {

			$scope.expr= $scope.expr.replace("++", "+");
			$scope.expr= $scope.expr.replace("--", "+");
		}
	}




});