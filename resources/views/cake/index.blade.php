@extends('master')
 <div class="content">
<h3>lista de kekes</h3>

<table>
<tr>
  <td><strong>nombre</strong></td>
  <td><strong>descripcion</strong></td>
  <td><strong>precio</strong></td>
</tr>
 @foreach($cakes as $cake)
<tr>

  <td>{{ $cake->name }}</td>
  <td>{{ $cake->description }}</td>
  <td>{{ $cake->price }}</td>

</tr>
  @endforeach
</div>
  @section('content')



@stop
