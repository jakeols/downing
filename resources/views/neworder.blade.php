@extends('app')
@section('name')
New Order
@endsection
@section('content')
<h6>Order Complete Status</h6>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
    0%
  </div>
</div>
<form class="form" method="get" action="/order/show">
<div class="input-group input-daterange">
    <input type="text" class="form-control" value="2012-04-05" placeholder="Must Arrival Date">
    <span class="input-group-addon">to</span>
    <input type="text" class="form-control" value="2012-04-19" placeholder="Will Return Date">
</div><br>
<button type="submit" class="btn btn-primary">Choose from Inventory</button>
</form>

<script>
$('.input-daterange input').each(function() {
    $(this).datepicker("clearDates");
});
</script>
@endsection
