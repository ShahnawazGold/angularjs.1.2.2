

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
    <h1 ng-click="changeName()">{{firstname}}</h1>
</div>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    
    $scope.firstname = "John";
    $scope.changeName = function() {
        $scope.firstname = "Nelly";
    }
});
</script>

<p>Click on the header to run the "changeName" function.</p>

<p>This example demonstrates how to use the controller to change model data.</p>

</body>
</html>
