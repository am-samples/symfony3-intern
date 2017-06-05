'use strict';

var NewsApp = angular.module('NewsApp', [
    'newsList'
]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});



'use strict';

angular.
module('NewsApp').
component('newsList', {
    templateUrl: '/partials/news-list.template.html',
    controller: function NewsListController($scope, $http) {
        var self = this;

        $http.get('getJsonNews').success(function(data) {
            $scope.news = data;
            $scope.totalItems = data['all'];
            $scope.currentPage = 1;
            $scope.itemsPerPage = $scope.viewby;
            $scope.totalPages = Math.ceil($scope.totalItems / 10);
        });

        $scope.setPage = function (pageNo) {
            $scope.currentPage = pageNo;
        };

        $scope.viewby = function (countNews) {
            $http.get('getJsonNews/'+countNews).success(function(data) {
                $scope.news = data;
                console.log('Вызвана функция, значение - ' + countNews);
            });
        }
    }
});
'use strict';

angular.module('newsList', []);
