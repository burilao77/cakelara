@extends('master')

 <h3>Registre su Queque</h3>
<div class="container">
     {!! Form::open(['route' => 'cake.store', 'method' => 'POST']) !!}
     <div>
         {!! Form::text('name', null, [ 'required', 'placeholder' => 'Ingresa una nombre']) !!}
     </div>
     <div>
        {!! Form::textarea('description', null, [ 'required', 'placeholder' => 'Ingresa una descripcion']) !!}
     </div>
     <div>
        {!! Form::number('price', null, [ 'required', 'placeholder' => 'Ingresa un precio']) !!}
     </div>
    <div>
        {!! Form::submit('Registra') !!}
    </div>
     {!! Form::close() !!}
</div>


 @section('content')

@stop
