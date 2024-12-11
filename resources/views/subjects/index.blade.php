<ul>
  @foreach ($subjects as $subject)
    <li>
      <a href="{{route('subjects.show',$subject)}}"> {{$subject->subject_name}}</a>.
    </li>
  @endforeach
</ul>