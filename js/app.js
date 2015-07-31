var tonyApp = angular.module('tonyApp',[]);

// tonyApp.controller('MovieController', ['$scope', function($scope) {
//   $scope.movies = $http({
//         method: 'JSONP', 
//         url: 'http://www.myapifilms.com/imdb/top'
//    });

tonyApp.controller('MoviesCtrl', ['$scope', '$http', function ($scope, $http) { 
  $scope.movies = [];
  $http.get({
  	method: 'JSONP', 
    url: 'http://jsonplaceholder.typicode.com/photos'})
    .then(function(response){
      $scope.movies = response.data.movies;
    });
}]) 