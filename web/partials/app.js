var myApp = angular.module('myApp',[]).
config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/phones', {
            templateUrl: 'partials/phone-list.html',
            controller: 'PhoneListCtrl'}).
        when('/phones/:phoneId', {
            templateUrl: 'partials/phone-detail.html',
            controller: 'PhoneDetailCtrl'
        }).
        otherwise({
            redirectTo: '/phones'
        });
    }]);
myApp.controller('NewsController', ['$scope', function($scope) {
    $scope.helloMessage= 'Привет, мир!';
}]);