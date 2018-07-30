var app= angular.module("myCalApp", []);
app.controller('myCtrl', function($scope) {
	$scope.expr= "";	//bt dong tren
	$scope.result= 0;
	$scope.mem= 0;	

	$scope.clicked= function(val) {
		if ($scope.mem == 0) {
			$scope.expr += val;
		} else {
			if (val== "+" || val == "-" || val == "*" || val== "/") {
				if ($scope.result!== 0) {
					
					$scope.expr= "";
					$scope.expr= $scope.result + val;
					$scope.mem= 0;
				} else {
					$scope.expr= "";
					$scope.expr= $scope.expr + val;
					$scope.mem= 0;
				}
			} else {
				$scope.expr= "";
				$scope.expr+= val;
				$scope.mem= 0;
			}		
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
			//$scope.expr= "Syntax Error";
			$scope.mem= 1;
		} else {
			$scope.convert();
			
			$scope.result= eval($scope.expr);
			$scope.mem= 1;
		}
		

	}


	$scope.enter= function($event) {	//it's for editable input, but i set it to disable.
		if ($event.keyCode == 13) {
			$scope.eql_clicked();
					
		}
	}

	
	$scope.check= function() {
	//$scope.exprForm= /(\+|\-)?(\d+\.\d+|\d+)(\+|\-|\*|\/)((\+|\-)+)?(\d+\.\d+|\d+)$/g;
	$scope.exprForm= /^(\*|\/).+|.+(\*\*).+|.+(\*\/).+|.+(\/\/).+|.+(\-\*).+|.+(\-\/).+|.+(\+\*).+|.+(\+\/).+|.+(\/\*).+|.+(\/|\*)$/g; //cac truong hop wrong expr
		//window.alert($scope.expr);
		if ($scope.exprForm.test($scope.expr)== false) {
			
			return true;	//neu khong thuoc dang wrong expr thi return true
		} else {
			
			return false;
		}

	}

	$scope.convert= function() {
		while ($scope.expr.indexOf("++") > -1 || $scope.expr.indexOf("--") > -1) {

			$scope.expr= $scope.expr.replace("++", "+");
			$scope.expr= $scope.expr.replace("--", "+");
		}

		while ($scope.expr.indexOf("0")== 0) {
			$scope.expr= $scope.expr.slice(1);
		}
	}




});