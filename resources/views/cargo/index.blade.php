@extends('templates.admincargo_tpl')
@section('content')
<?php echo $mensajes; ?>

{{$cargo->NOMBRE}}



@endsection
@section('mensajes')
<label>Este es el area de mensajes</label>


@endsection



