@extends('layouts.master',['title'=>'My Preaferd Shops'])
@section('container')
<div class="container" style="opacity: 0.9">
<div class="row">
	@foreach($shops as $shop)
	<div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">{{$shop->shop_name}}</div>
        <div class="panel-body"><img src="../../images/{{$shop->image}}.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">
        	<div class="btn-group">      		
  <a class="btn btn-danger" href="{{action('MyPreaferdShopsController@update', ['id' => $shop->id])}}">Remove</a>
</div>
</div>
      </div>
    </div>
@endforeach
@stop
