 app.controller('NearbyShopsController', function($scope, $http, API_URL) {

       $http.get(API_URL+'nearbyShops')
  .success(function(response){
    $scope.shops = response;
    console.log(response);
  });
  $scope.controllerName='NearbyShopsController';
/*$http.get(API_URL+'myPreferedShops')
  .success(function(response){
    $scope.shops = response;
    console.log(response);
  });*/
 
/*$scope.shops = function() {
     $http({
       method: 'GET',
       url: API_URL+'nearbyShops'
     }).success(function(data){
       console.log(data);
     }).error(function(data){
       console.log(data);
       alert('Data is missing');
     });
    }*/
/*  $scope.remove = function(id) {
     $http({
       method: 'GET',
       url: API_URL + 'myPreferedShops/' + id
     }).success(function(data){
      location.reload();
       console.log(data);
     }).error(function(data){
       console.log(data);
       alert('Shop could not be removed');
     });
    }*/
    $scope.update = function(id,action) {
     $http({
       method: 'GET',
       url: API_URL + 'nearbyShops/'+action+'/'+id
     }).success(function(data){
      location.reload();
       console.log(data);
     }).error(function(data){
       console.log(data);
       alert('Shop could not be removed');
     });
    }


 // save new supplier and update existing supplier
  /*$scope.save = function(modalstate, id) {
    var url = API_URL + "supplier";
    if (modalstate === 'edit') {
      url += "/" + id;
    }
    $http({
      method: 'POST',
      url: url,
      data: $.param($scope.supplier),
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function(response){
      console.log(response);
      location.reload();
    }).error(function(response){
      console.log(response);
      alert('This is embarassing. An error has occured. Please check the log for details');
    });
  }
  });

 $scope.update = function(action, id) {
      var url = API_URL;
      url +="/" + action + "/" + id;
    $http({
      method: 'POST',
      url: url,
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function(response){
      console.log(response);
      location.reload();
    }).error(function(response){
      console.log(response);
      alert('This is embarassing. An error has occured. Please check the log for details');*/
    });
  
