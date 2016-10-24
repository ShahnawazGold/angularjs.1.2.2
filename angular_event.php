


<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<!--
<div ng-app="myApp" ng-controller="myCtrl">

<h1 ng-mousemove="count = count +1">Mouse Over Me!</h1>

<h2>{{ count }}</h2>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {

    $scope.count = 0;
});
</script>   


    ng-blur
    ng-change
    ng-click
    ng-copy
    ng-cut
    ng-dblclick
    ng-focus
    ng-keydown
    ng-keypress
    ng-keyup
    ng-mousedown
    ng-mouseenter
    ng-mouseleave
    ng-mousemove
    ng-mouseover
    ng-mouseup
    ng-paste

-->


<div ng-app="myApp" ng-controller="myCtrl">

<button ng-click="myFunction()">Click Me!</button>

<p>{{ count }}</p>

</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.count = 0;

    $scope.myFunction = function() {
        $scope.count++;
    }
});
</script> 

</body>
</html>