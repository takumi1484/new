<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
</head>
<body>
@foreach($shops as $shop)
<div>
    <div>{{{ $shop->id }}}</div>
    <div>{{{ $shop->name }}}</div>
    <div>{{{ $shop->station }}}</div>
    <div>{{{ $shop->chunithm }}}</div>
    <div>{{{ $shop->maimai }}}</div>
    <div>{{{ $shop->voltex }}}</div>
    <div>{{{ $shop->jubeat }}}</div>
    <div>{{{ $shop->coaster }}}</div>
</div>
<hr>
@endforeach
</body>
</html>
