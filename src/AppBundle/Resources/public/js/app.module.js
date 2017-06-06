'use strict';

var NewsApp = angular.module('NewsApp', [])
    .config(function($interpolateProvider){

        $interpolateProvider.startSymbol('[[').endSymbol(']]');
});


