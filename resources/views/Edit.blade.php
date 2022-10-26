<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>



<link rel="stylesheet" href="/app.css">

@foreach ($data as $row)
    
<form action="{{url('update')}}/{{$row->id}}" method="post">
    @csrf
    <input type="text" value="{{$row->name}}" name="name">
    <button>Update</button>
</form>
<a href="{{url("Studentadd")}}/{{$row->id}}"><button type="button">Add Student</button></a>

@endforeach
<div>
</div>


<div>

    <table id="apprenant">
        <thead>
            <tr>
                <th>Apprentice first name</th>
                <th>promotion last name</th>
                <th>email</th>
                <th>Action</th>

                
            </tr>
        </thead>
        <tbody id ="contentStudent">
            @foreach ($student as $entry)
                
            <tr>
                <td>{{$entry->first_name}}</td>
                <td>{{$entry->last_name}}</td>
                <td>{{$entry->email}}</td>

                <td>
                    <a href="Edit/{{$entry->id}}"><button>Edit</button></a>
                    <a href="Delete/{{$entry->id}}"><button>Delete</button></a>
                </td>
            </tr>
            @endforeach
    
        </tbody>
    </table>


    <input type="text" id="searchstudent"  placeholder="Search">


    <script src="/search.js"></script>

</div>