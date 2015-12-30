@extends('app')
@section('name')
New Order
@endsection
@section('content')
<form class="form" method="get" action="/order/show">
<div class="input-group input-daterange">
    <input type="text" class="form-control" value="2012-04-05" placeholder="Start Date">
    <span class="input-group-addon">to</span>
    <input type="text" class="form-control" value="2012-04-19" placeholder="End Date">
</div><br>
<button type="submit" class="btn btn-primary">Continue</button>
</form>

<script>
$('.input-daterange input').each(function() {
    $(this).datepicker("clearDates");
});
</script>
@endsection
