@extends('layouts.master',['title'=>'My Preaferd Shops'])
@section('container')
<div class="container" style="opacity: 0.9">
	<div ng-controller="MyPreaferdShopsController">
		<div class="row">
			<div class="col-sm-2" ng-repeat="shop in shops">
				<div class="panel panel-primary">
					<div class="panel-heading">@{{shop.name}}</div>
					<div class="panel-body">
						<img src="@{{shop.picture}}" class="img-responsive" style="width:100%" alt="Image">
						</div>
						<div class="panel-footer">
							<div class="btn-group">
								<button class="btn btn-danger" ng-click="remove(shop.id)">Remove</button>
							</div>
						</div>
					</div>
				</div>
			</div>
<script src="angular/controllers/MyPreaferdShopsController.js"></script>
@stop
