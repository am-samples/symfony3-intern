'use strict';

angular.
module('NewsApp').
component('newsList', {
    templateUrl: '/partials/news-list.template.html',
    controller: function NewsListController($scope, $http) {
        var self = this;

        $http.get('getJsonNews').success(function(data) {
            $scope.news = data;
        });
    }
});