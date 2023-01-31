<h2>Hello {{$name}}!</h2>

@foreach($students as $student)
    {{ $student->name}}<br/>
@endforeach