<link rel="stylesheet" href="/app.css">

@foreach ($data as $row)
    
<form action="{{url('Edit/update')}}/{{$row->id}}" method="post">
    @csrf
    <input type="text" value="{{$row->first_name}}" name="first_name">
    <input type="text" value="{{$row->last_name}}" name="last_name">
    <input type="text" value="{{$row->email}}" name="email">


    <button>Update</button>
</form>
@endforeach