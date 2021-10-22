@extends('layouts.app')
@section('content')

<h1>This is the Service page</h1>

@foreach($data as $item)
{{ $item }}
<?php 
echo "<br>"
?>
@endforeach


@endsection