<form action="{{$action}}" method="{{$method}}" style="margin-top: 20px;">
    @csrf
{{$slot}}
</form>