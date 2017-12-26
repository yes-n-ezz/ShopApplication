 app.controller('NearbyShopsController', function($scope, $http, API_URL) {
 
 getNearShops('nearbyShops/',$http,API_URL,$scope);

//Update the status of a shop liked or not
    $scope.update = function(id,action) {
     $http({
       method: 'GET',
       url: API_URL + 'nearbyShops/'+action+'/'+id
     }).success(function(data){
      location.reload();
       console.log(data);
     }).error(function(data){
       console.log(data);
       alert('Shop could not be updated');
     });
    }

});
  
