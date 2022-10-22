<link rel="stylesheet" href="/app.css">

@foreach ($data as $row)
    
<form action="{{url('update')}}/{{$row->id}}" method="post">
    @csrf
    <input type="text" value="{{$row->name}}" name="name">
    <button>Update</button>
</form>
@endforeach