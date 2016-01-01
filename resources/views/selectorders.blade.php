@extends('app')
@section('name')
Continue Order
@endsection
@section('content')
<h6>Order Complete Status</h6>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
    33%
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
  <tr>
    <td><img src="http://i.imgur.com/JkqGIxN.jpg" height="200"></img></td>
    <td><p>BANNERSTANDS</p></td>
    <td>
      <p>DYE-SUB PRINT ON MICROKNIT APPLIED TO A QUCKCREEN 3 BANNERSTAND</p>
    </td>
    <td><p>1</p></td>
    <td>
      <form class="form-inline" action="/order/review">
        <div class="form-group">
        <input class="form-control" type="text" placeholder="Quantity">
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
  <tr>
    <td>  <button type="submit" class="btn btn-primary">Review Order</button>
      </form>
    </td>
  </tr>
</tbody>
</table>
@endsection
