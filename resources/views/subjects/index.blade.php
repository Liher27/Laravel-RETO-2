<ul>
  {{--esto es un comentario: recorremos el listado de posts--}}
  @foreach ($subjects as $subject)
    {{-- visualizamos los atributos del objeto --}}
    <li>
      <p>ID de modelo {{$subject->id}} </p>
      <p>ID de curso {{$subject->course_id}}</p>   
      <p>Nombre de modelo {{$subject->subject_name}}</p>
      <p>Hora de modelo {{$subject->subject_hours}}</p>
    </li>
  @endforeach
</ul>