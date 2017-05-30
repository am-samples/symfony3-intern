var myApp = angular.module('myApp',[]);
myApp.controller('NewsController', ['$scope', function($scope) {
    $scope.helloMessage= 'Привет, мир!';
}]);