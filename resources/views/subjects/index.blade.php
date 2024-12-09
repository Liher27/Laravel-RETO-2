<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($subjects as $subject)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <a href="{{route('subjects.show',$subject)}}"> {{$subject->subject_name}}</a>.
    </li>
  @endforeach
</ul>