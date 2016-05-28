<!doctype html>
<html lang="en" >
<head>
<meta charset="utf-8">
<title>My HTML File</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" >
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
</head>
<body ng-init="">
<style>
#content {
  max-width: 600px;
  margin: 20px auto 0 auto;
}
#pagination {
  text-align: center;
}
.list-group{
position:relative;
display:inline-block;
}
</style>

<div ng-app="app" ng-controller="paginationCtrl"> 
  <div id="content">
    <ul class="list-group">
      <li class="list-group-item" ng-repeat="item in items | startFrom: startingItem() | limitTo: itemsPerPage">{{ item }}</li>
    </ul>
	 <ul class="list-group">
      <li class="list-group-item" ng-repeat="item2 in items2 | startFrom: startingItem() | limitTo: itemsPerPage">{{ item2 }}</li>
    </ul>
	<ul class="list-group">
      <li class="list-group-item" ng-repeat="item3 in items3 | startFrom: startingItem() | limitTo: itemsPerPage">{{ item3 }}</li>
    </ul>
	<ul class="list-group">
      <li class="list-group-item" ng-repeat="item4 in items4 | startFrom: startingItem() | limitTo: itemsPerPage">{{ item4 }}</li>
    </ul>
    <div id="pagination" class="row">
      <button class="pull-left btn btn-primary btn-sm" ng-disabled="firstPage()" ng-click="pageBack()">Назад</button>
      <span>{{currentPage+1}} из {{numberOfPages()}}</span>
      <button class="pull-right  btn btn-primary btn-sm" ng-disabled="lastPage()" ng-click="pageForward()">Вперед</button> 
    </div>
  </div>
</div>


<script>
var app = angular.module('app', [])
.filter('startFrom', function(){
  return function(input, start){
    start = +start;
    return input.slice(start);
  }
})
.controller('paginationCtrl', function($scope){
  $scope.currentPage = 0;
  $scope.itemsPerPage = 10;
  $scope.items = [];
  $scope.items2 = [];
   $scope.items3 = []; 
   $scope.items4 = [];
  for(var i=0; i<100; i++){
    $scope.items.push('Firstname ' + i);
	$scope.items2.push('Lastname ' + i);
	$scope.items3.push('Address ' + i);
	$scope.items4.push('Email ' + i);
  }
  $scope.firstPage = function() {
    return $scope.currentPage == 0;
  }
  $scope.lastPage = function() {
    var lastPageNum = Math.ceil($scope.items.length / $scope.itemsPerPage - 1);
    return $scope.currentPage == lastPageNum;
  }
  $scope.numberOfPages = function(){
    return Math.ceil($scope.items.length / $scope.itemsPerPage);
  }
  $scope.startingItem = function() {
    return $scope.currentPage * $scope.itemsPerPage;
  }
  $scope.pageBack = function() {
    $scope.currentPage = $scope.currentPage - 1;
  }
  $scope.pageForward = function() {
    $scope.currentPage = $scope.currentPage + 1;
  }
});
</script>
</body>
</html>
