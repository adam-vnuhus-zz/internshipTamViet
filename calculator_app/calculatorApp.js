var app = angular.module("myApp", []);
app.controller("formCtrl", function($scope) {
  $scope.expressions = "0";
  // $scope.clicked_6 = function() {
  //     $scope.number += "6";
  // }
  // $scope.clicked_7 = function() {
  //     $scope.number += "7";
  // }

  $scope.count = 0;
  //Đếm số lần click của các kí tự không phải số
  $scope.buttonClicked = function(button) {
    if ($scope.expressions == "0") $scope.expressions = button;
    else if (!isNaN(button)) {
      $scope.expressions += button;
      $scope.count = 0;
    } else if (isNaN(button) && $scope.count < 1) {
      $scope.expressions += button;
      $scope.count++;
    }
  };

  $scope.equalClicked = function() {
    // $scope.result = eval($scope.expressions);
    try {
      $scope.result = eval($scope.expressions);
      //   $scope.expressions = $scope.result;
    } catch (err) {
      $scope.expressions = "error";
      //   console.log(err);
    }
  };

  $scope.clearClicked = function() {
    $scope.expressions = "0";
    $scope.result = "";
  };

  $scope.backspaceClicked = function() {
    if ($scope.expressions.length > 1)
      $scope.expressions = $scope.expressions.slice(0, -1);
    else $scope.expressions = "0";
  };

  $scope.navClicked = function() {
    let num = parseFloat($scope.expressions);
    function pos_to_neg(num) {
      return -Math.abs(num);
    }
    $scope.expressions = pos_to_neg(num);
  };
});
