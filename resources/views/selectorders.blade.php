@extends('app')
@section('name')
Continue Order
@endsection
@section('content')
<h6>Order Complete Status</h6>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
    0%
  </div>
</div>
<table class="table table-hover">
  <thead>
<tr>
  <td><h3>Photo</h3></td>
  <td><h3>Type</h3></td>
  <td><h3>Description</h3></td>
  <td><h3>Quantity Available</h3></td>
  <td><h3>Add</h3></td>
</tr>
</thead>
<tbody>
  @foreach ($availableinventory as $availableinventory)
  <tr>
    <td><img src="http://i.imgur.com/JkqGIxN.jpg" height="200"></img></td>
    <td><p>{{ $availableinventory['type'] }}</p></td>
    <td>
      <p>{{ $availableinventory['description'] }}</p>
    </td>
    <td><p>{{ $availableinventory['stock'] }}</p></td>
    <td>
      <form class="form-inline" method="POST" action="/order/show">
        <div class="form-group">
        <input class="form-control" type="text" placeholder="Quantity">
        <input type="hidden" id="{{ $availableinventory['objectId'] }}">
      </div>
      <div class="form-group">
        <div class="checkbox">
    <label>
      <input type="checkbox">Add to Order
    </label>
  </div>
    </div>
      </td>
  </tr>
  @endforeach
  <tr>
    <td>  <button type="submit" class="btn btn-primary">Review Order</button>
      </form>
    </td>
  </tr>
</tbody>
</table>
@endsection
