@extends('app')
@section('name')
Continue Order
@endsection
@section('content')
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
      <form class="form-inline">
        <input class="form-control" type="text"><button type="submit" class="btn btn-primary">Add</button>
    </td>
  </tr>
</tbody>
</table>
@endsection
