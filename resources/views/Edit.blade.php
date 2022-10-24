<link rel="stylesheet" href="/app.css">

@foreach ($data as $row)
    
<form action="{{url('update')}}/{{$row->id}}" method="post">
    @csrf
    <input type="text" value="{{$row->name}}" name="name">
    <button>Update</button>
</form>
@endforeach
<div>
</div>

<a href="{{url("Studentadd")}}/{{$row->id}}"><button type="button">Add Student</button>



    <table id="apprenant">
        <thead>
            <tr>
                <th>Apprentice first name</th>
                <th>promotion last name</th>
                <th>email</th>
                <th>Action</th>

                
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $entry)
                
            <tr>
                <td>{{$entry->first_name}}</td>
                <td>{{$entry->last_name}}</td>
                <td>{{$entry->email}}</td>

                <td>
                    <a href="Edit/{{$row->id}}"><button>Edit</button></a>
                    <a href="Delete/{{$row->id}}"><button>Delete</button></a>
                </td>
            </tr>
            @endforeach
    
        </tbody>
    </table>
    