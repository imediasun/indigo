var app = angular.module('angularjs-starter', [ 'ui.bootstrap.pagination' ]);


app.factory( 'myData', function() {

  var data = [];
  // push some dummy data

  for(var i = 0; i < 1200; i++) {
    data.push( { name: "Firstname"+i, lastname :"Lastname"+i, address :"Address"+i, email :"Email"+i} );
  }

  

  return {
    get: function(offset, limit) {
    return data.slice( offset, offset+limit );
    },
    count: function() {
    return data.length;
    }

  };

});


app.controller('MainCtrl', function($scope, myData) {

  $scope.numPerPage = 20;

  $scope.noOfPages = Math.ceil(myData.count() / $scope.numPerPage);

  $scope.currentPage = 1;


  $scope.setPage = function () {
  $scope.data = myData.get( ($scope.currentPage - 1) * $scope.numPerPage, $scope.numPerPage );

  };

  

  $scope.$watch( 'currentPage', $scope.setPage );
 $scope.reversen = true;
  $scope.ordern = function(predicate) {
    $scope.reversen = ($scope.predicaten === predicate) ? !$scope.reversen : false;
    $scope.predicaten = predicate;
	
  };
  $scope.reversel = true;
  $scope.orderl = function(predicate) {
    $scope.reversel = ($scope.predicatel === predicate) ? !$scope.reversel : false;
    $scope.predicatel = predicate;
	
  };
  $scope.reversea = true;
  $scope.ordera = function(predicate) {
    $scope.reversea = ($scope.predicatea === predicate) ? !$scope.reversea : false;
    $scope.predicatea = predicate;
	
  };
  $scope.reversee = true;
  $scope.ordere = function(predicate) {
    $scope.reversee = ($scope.predicatee === predicate) ? !$scope.reversee : false;
    $scope.predicatee = predicate;
	
  };
  
  
  
  
  
  
 
});

                