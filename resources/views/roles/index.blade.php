<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($roles as $role)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <a href="{{route('role.show',$role)}}"> {{$role->role_name}}</a>.
    </li>
  @endforeach
</ul>