

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<!--
<div ng-app="myApp" ng-controller="myCtrl"> 

<p>Today's welcome message is:</p>

<h1>{{myWelcome}}</h1>

</div>

<p>The $http service requests a page on the server, and the response is set as the value of the "myWelcome" variable.</p>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope, $http) {

$http.get("welcom.htm")
.then(function(response){
     $scope.myWelcome = response.data;
  });
});
</script>

    .delete()
    .get()
    .head()
    .jsonp()
    .patch()
    .post()
    .put()
-->

<div ng-app="myApp" ng-controller="myCtrl"> 

<p>Data : {{content}}</p>
<p>Status : {{statuscode}}</p>
<p>StatusText : {{statustext}}</p>

</div>

<p>The response object has many properties. This example demonstrate the value of the data, status, and statusText properties.</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

  $http.get("welcome.htm")
  .then(function(response) {

      $scope.content = response.data;// helo angular
      $scope.statuscode = response.status; // 20
      $scope.statustext = response.statusText;   // text here          
  });
});
</script>





<!--
<div ng-app="myApp" ng-controller="myCtrl"> 

<h1>{{content}}</h1>

</div>

<p>The $http service executes different functions on success and failure.</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("wrongfilename.htm")
  .then(function(response) {
      $scope.content = response.data;
  }, function(response) {
      $scope.content = "Something went wrong";
  });
});
</script>  -->



<div ng-app="myApp" ng-controller="customersCtrl"> 

<ul>
  <li ng-repeat="x in myData">
    {{ x.Name + ', ' + x.Country }}
  </li>
</ul>

</div>

<script>
var app = angular.module('myApp', []);

app.controller('customersCtrl', function($scope, $http) {
    
  $http.get("customers.php").then(function (response) {
      $scope.myData = response.data.records;
  });
});
</script>
</body>
</html>