'use strict';

var NewsApp = angular.module('NewsApp', [
    'newsList'
]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});


