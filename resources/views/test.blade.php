@extends('layout')
@section('title','test')
@section('body')

<?php
$session_data = "保存前"
?>
<p>{{$session_data}}</p>

<form action="/hello/session" method="post">
{{csrf_field()}}
<input type="text" name="input">
<input type="submit" value="send">
</form>

@endsection