
{{--@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have {{ count($records) }} records!
@else
    I don't have any records!
@endif--}}

@isset($records)
    I have {{ count($records) }} records!
@endisset
<br>

{{--@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}<br>
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user['name'] }}</p>
@endforeach--}}

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse