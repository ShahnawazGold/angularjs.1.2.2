

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<!--
<div ng-app="myApp" ng-controller="myCtrl">
<p>The url of this page is:</p>

<h3>{{myUrl}}</h3>
</div>

<p>This example uses the built-in $location service to get the absolute url of the page.</p>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $location) {
    $scope.myUrl = $location.absUrl();
});
</script>   

<div ng-app="myApp" ng-controller="myCtrl"> 

<p>Today's welcome message is:</p>

<h1>{{myWelcome}}</h1>

</div>

<p>The $http service requests a page on the server, and the response is set as
 the value of the "myWelcome" variable.</p>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {
  $http.get("welcome.htm").then(function (response) {
      $scope.myWelcome = response.data;
  });
});
</script>  

/////////////////////time interval
<div ng-app="myApp" ng-controller="myCtrl"> 

<p>This header will change after two seconds:</p>

<h1>{{myHeader}}</h1>

</div>

<p>The $timeout service runs a function after a sepecified number of milliseconds.</p>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $timeout) {
  $scope.myHeader = "Hello World!";

  $timeout(function () {
      $scope.myHeader = "How are you today?";
  }, 2000);
});
</script> -->


<div ng-app="myApp" ng-controller="myCtrl"> 

<p>The time is:</p>

<h1>{{theTime}}</h1>

</div>

<p>The $interval service runs a function every specified millisecond.</p>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $interval) {

  $scope.theTime = new Date().toLocaleTimeString();
  
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);
});
</script>


</body>
</html>