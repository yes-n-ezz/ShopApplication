@extends('layouts.master',['title'=>'Nearby Shops'])
@section('container')
<div class="container">
  <div ng-controller="NearbyShopsController">
    <div class="page-header"></div>
    <div class="container" style="opacity: 0.9">
      <div class="row">
        <div class="col-sm-2" ng-repeat="shop in shops">
          <div class="panel panel-primary" >
            <div class="panel-heading">@{{ shop.name }}</div>
            <div class="panel-body">
              <img src="@{{ shop.picture }}" class="img-responsive" style="width:100%" alt="Image">
              </div>
              <div class="panel-footer">
                <div class="btn-group">
                  <button class="btn btn-danger" ng-click="update(shop.id,'dislike')">Dislike</button>
                  <button class="btn btn-success" ng-click="update(shop.id,'like')">Like</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="angular/controllers/NearbyShopsController.js"></script>
  @stop

