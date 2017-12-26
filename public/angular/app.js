var app = angular.module('shop_app', [])
    .constant('API_URL', 'http://localhost:8000/');

//This function will allow us to get the user location in order to get the shops sorted by the distance
function getNearShops(url, http, api_url, scope) {
    var x = { lat: 0, lon: 0 };
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            x.lat = position.coords.latitude;
            x.lon = position.coords.longitude;
            var coordinates = JSON.stringify(x);
            http.get(api_url + url + coordinates)
                .success(function(response) {
                    scope.shops = response;
                });
        });
    };
}