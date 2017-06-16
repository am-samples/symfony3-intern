'use strict';

angular.
module('NewsApp').
component('newsList', {
    templateUrl:  '/app_dev.php/ru/news_list',
    controller: function NewsListController($scope, $http) {
        var self = this;

        var totalPages;
        $http.get('/app_dev.php/ru/getJsonNews').success(function(data) {
            $scope.news = data;
            $scope.totalItems = data.all;
            $scope.currentPage = 1;
            $scope.itemsPerPage = $scope.viewby;
            $scope.totalPages = Math.ceil($scope.totalItems / 10);
            totalPages = $scope.totalPages;
            var it = $scope.locale;
            var item = $scope.currentPage;
        });

        $scope.setPage = function (pageNo) {
            $scope.currentPage = pageNo;
        };

        $scope.viewby = function (countNews) {
            if (countNews === 0 || countNews === totalPages) {
                $scope.disabled = true;
            }
            else {
                $scope.disabled = false;
            }
            $http.get('/app_dev.php/ru/getJsonNews/'+countNews).success(function(data) {
                $scope.news = data;
                console.log('Вызвана функция, значение - ' + countNews);
            });
        }
    }
});

