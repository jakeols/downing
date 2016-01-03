@extends('app')
@section('name')
New Order
@endsection
@section('content')
<h6>Order Complete Status</h6>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
    33%
  </div>
</div>
<form class="form" method="POST" action="/order/">
<div class="input-group input-daterange">
    <input id="arrival" type="text" class="form-control" placeholder="Must Arrival Date">
    <span class="input-group-addon">to</span>
    <input id="return" type="text" class="form-control" placeholder="Will Return Date">
</div><br>
<button type="submit" class="btn btn-primary">Choose from Inventory</button>
</form>

<script>
$('.input-daterange input').each(function() {
    $(this).datepicker("clearDates");
});
</script>
@endsection
