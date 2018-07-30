var app = angular.module("myApp", []);
app.controller("formCtrl", function($scope) {
  $scope.expressions = "0";

  $scope.operationButtonClicked = false;
  $scope.equalButtonClicked = false;
  $scope.countOperationButtonClicked = 0;

  $scope.buttonClicked = function(button) {
    if ($scope.expressions == "0") {
      $scope.expressions = button;
    } else if (!isNaN(button)) {
      if ($scope.equalButtonClicked == true) {
        $scope.expressions = button;
        $scope.saveButton = button;
        $scope.equalButtonClicked = false;
        $scope.operationButtonClicked = false;
      } else if (!$scope.equalButtonClicked) {
        $scope.saveButton = button;
        $scope.expressions += button;
        $scope.operationButtonClicked = false;
      }
    } else if (
      (button == "+" || button == "*" || button == "/") &&
      !$scope.operationButtonClicked &&
      (button != "(" && button != ")")
    ) {
      if ($scope.equalButtonClicked == true) {
        $scope.expressions = $scope.answer + button;
        $scope.equalButtonClicked = false;
      } else if (!$scope.equalButtonClicked) {
        $scope.expressions += button;
        $scope.operationButtonClicked = true;
      }
    } else if (button == "-") {
      if ($scope.equalButtonClicked == true) {
        $scope.expressions = $scope.answer + button;
        $scope.equalButtonClicked = false;
      } else if (!$scope.equalButtonClicked) {
        $scope.expressions += button;
      }
    } else if (button === "(" || button === ")") {
      if ($scope.equalButtonClicked == true) {
        $scope.expressions = button;
        if ($scope.operationButtonClicked == true) {
          $scope.operationButtonClicked = false;
        }
        $scope.equalButtonClicked = false;
      } else if (!$scope.equalButtonClicked) {
        $scope.expressions += button;
        if ($scope.operationButtonClicked == true) {
          $scope.operationButtonClicked = false;
        }
      }
    }
  };

  $scope.equalClicked = function() {
    try {
      $scope.convert();
      $scope.result = eval($scope.expressions);
      $scope.answer = $scope.result;
      $scope.equalButtonClicked = true;
      $scope.operationButtonClicked = false;
    } catch (err) {
      alert(err);
    }
  };

  $scope.answerClicked = function() {
    if ($scope.equalButtonClicked == true || $scope.expressions == "0") {
      $scope.expressions = $scope.answer;
      $scope.equalButtonClicked = false;
    } else if (!$scope.equalButtonClicked) {
      $scope.expressions += $scope.answer;
    }
  };

  $scope.clearClicked = function() {
    $scope.expressions = "0";
    $scope.result = "";
    $scope.equalButtonClicked = false;
  };

  $scope.backspaceClicked = function() {
    $scope.operationButtonClicked = false;
    if ($scope.expressions.length > 1)
      $scope.expressions = $scope.expressions.slice(0, -1);
    else $scope.expressions = "0";
  };

  $scope.navClicked = function(button) {
    if ($scope.expressions == "0") {
      $scope.expressions = button;
    } else if (button == "-") {
      if ($scope.equalButtonClicked == true) {
        $scope.expressions = $scope.answer + button;
        $scope.equalButtonClicked = false;
      } else if (!$scope.equalButtonClicked) {
        $scope.expressions += button;
      }
    }
  };

  $scope.convert = function() {
    while ($scope.expressions.indexOf("--") > -1) {
      $scope.expressions = $scope.expressions.replace("--", "+");
    }
  }
});
