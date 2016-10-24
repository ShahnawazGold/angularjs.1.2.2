

<!DOCTYPE html>
<html>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<div ng-app="myApp" ng-controller="myCtrl">
{{ firstName + " " + lastName }}
</div>

<script>
var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope) {
    $scope.firstName = "shah";
    $scope.lastName = "khan";
});
</script>

<p>It is recommended that you load the AngularJS library either in the HEAD or at the start of the BODY.</p>

</body>
</html>