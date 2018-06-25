var app = angular.module("myApp", []);
app.controller("formCtrl", function($scope) {
  $scope.expressions = "0";

  $scope.operationButtonClicked = false;

  $scope.buttonClicked = function(button) {
    if ($scope.expressions == "0") {
      $scope.expressions = button;
    } else if (!isNaN(button)) {
      $scope.expressions += button;
      $scope.operationButtonClicked = false;
    } else if (isNaN(button) && $scope.operationButtonClicked != true) {
      $scope.expressions += button;
      $scope.operationButtonClicked = true;
    }
  };

  $scope.equalClicked = function() {
    try {
      $scope.result = eval($scope.expressions);
    } catch (err) {
      alert(err);
    }
  };

  $scope.clearClicked = function() {
    $scope.expressions = "0";
    $scope.result = "";
  };

  $scope.backspaceClicked = function() {
    $scope.operationButtonClicked = false;
    if ($scope.expressions.length > 1)
      $scope.expressions = $scope.expressions.slice(0, -1);
    else $scope.expressions = "0";
  };

  $scope.navClicked = function() {
    $scope.operationButtonClicked = false;
    let num = parseFloat($scope.expressions);
    function pos_to_neg(num) {
      return -Math.abs(num);
    }
    $scope.expressions = pos_to_neg(num);
  };
});
