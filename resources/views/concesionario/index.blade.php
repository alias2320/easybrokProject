@extends('templates.adminconcesionario_tpl')
@section('content')
<?php echo $mensajes; ?>

{{$concesionario->NOMBRE}}



@endsection
@section('mensajes')
<label>Este es el area de mensajes</label>


@endsection