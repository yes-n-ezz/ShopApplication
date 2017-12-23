 app.controller('MyPreaferdShopsController', function($scope, $http, API_URL) {

     $http.get(API_URL + 'my_prefered_shops')
         .success(function(response) {
             $scope.shops = response;
             console.log(response);
         });

     $scope.remove = function(id) {
         $http({
             method: 'GET',
             url: API_URL + 'my_prefered_shops/' + id
         }).success(function(data) {
             location.reload();
             console.log(data);
         }).error(function(data) {
             console.log(data);
             alert('Shop could not be removed');
         });
     }

 });