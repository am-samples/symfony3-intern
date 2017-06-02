'use strict';

angular.
module('NewsApp').
component('newsList', {
    templateUrl: '/partials/news-list.template.html',
    controller: function NewsListController($scope, $http) {
        var self = this;

        $http.get('getJsonNews').success(function(data) {
            $scope.news = data;
            $scope.totalItems = $scope.data.length;
            $scope.currentPage = 1;
            $scope.itemsPerPage = $scope.viewby;
            $scope.maxSize = 5; //Number of pager buttons to show
        });

        $scope.setPage = function (pageNo) {
            $scope.currentPage = pageNo;
        };


        


        // $scope.pageChanged = function() {
        //     console.log('Page changed to: ' + $scope.currentPage);
        // };

        // $scope.setItemsPerPage = function(num) {
        //     $scope.itemsPerPage = num;
        //     $scope.currentPage = 1; //reset to first paghe
        // }


    }
});