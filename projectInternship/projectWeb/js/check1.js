var app= angular.module("myCalApp", []);
app.controller('myCtrl', function($scope) {
	$scope.expr= "";	//bt dong tren
	$scope.result= 0;
	$scope.mem= 0;	

	$scope.clicked= function(val) {
		if ($scope.mem == 0) {
			$scope.expr += val;
		} else {
			$scope.expr= "";
			$scope.expr+= val;
			$scope.mem= 0;
		}
	}	

	

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

	
	$scope.check= function() {
	$scope.exprForm= /(\+|\-)?(\d+\.\d+|\d)+(\+|\-|\*|\/)((\+|\-)+)?(\d+\.\d+|\d)+/g;
		//window.alert($scope.expr);
		if ($scope.exprForm.test($scope.expr)== false) {
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