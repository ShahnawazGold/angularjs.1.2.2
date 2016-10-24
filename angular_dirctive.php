

<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<!--
<div data-ng-app="" data-ng-init="quantity=1;price=5">

<h2>Cost Calculator</h2>

Quantity: <input type="number" ng-model="quantity">
Price: <input type="number" ng-model="price">

<p><b>Total in dollar:</b> {{quantity * price}}</p>

</div>
-->

<!--
// <div ng-app="" ng-init="names=[
// {name:'Jani',country:'Norway'},
// {name:'Hege',country:'Sweden'},
// {name:'Kai',country:'Denmark'}]">

// <p>Looping with objects:</p>
// <ul>

// </ul>
// <li ng-repeat=" x in names">
// {{ x.name + ', ' + x.country }}
// </li>
// // </div -->

<body ng-app="myApp">

<w3-test-directive></w3-test-directive>

<script>
var app = angular.module("myApp", []);
app.directive("w3TestDirective", function() {
    return {
        template : "<h1>Made by a directive!</h1>"
    };
});
</script>

</body>

</body>
</html>