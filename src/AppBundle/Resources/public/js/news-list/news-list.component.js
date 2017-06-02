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

        


        // $scope.pageChanged = function() {
        //     console.log('Page changed to: ' + $scope.currentPage);
        // };

        // $scope.setItemsPerPage = function(num) {
        //     $scope.itemsPerPage = num;
        //     $scope.currentPage = 1; //reset to first paghe
        // }


    }
});