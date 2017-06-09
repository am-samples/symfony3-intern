'use strict';

angular.
module('NewsApp').
component('newsList', {
    templateUrl:  '/app_dev.php/news_list',
    controller: function NewsListController($scope, $http) {
        var self = this;

        $http.get('/app_dev.php/getJsonNews').success(function(data) {
            $scope.news = data;
            $scope.totalItems = data.all;
            $scope.currentPage = 1;
            $scope.itemsPerPage = $scope.viewby;
            $scope.totalPages = Math.ceil($scope.totalItems / 10);
            var it = $scope.locale;
            var item = $scope.currentPage;
        });

        $scope.setPage = function (pageNo) {
            $scope.currentPage = pageNo;
        };

        $scope.viewby = function (countNews) {
            $http.get('/app_dev.php/getJsonNews/'+countNews).success(function(data) {
                $scope.news = data;
                console.log('Вызвана функция, значение - ' + countNews);
            });
        }
    }
});

