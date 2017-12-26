app.controller('MyPreaferdShopsController', function($scope, $http, API_URL) {

getNearShops('my_prefered_shops/', $http, API_URL, $scope);

    //Remove a shop from My preaferd Shops Rubric
    $scope.remove = function(id) {
        $http({
            method: 'GET',
            url: API_URL + 'my_prefered_shops/update/' + id
        }).success(function(data) {
            location.reload();
            console.log(data);
        }).error(function(data) {
            console.log(data);
            alert('Shop could not be removed');
        });
    }

});