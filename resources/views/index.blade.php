<link rel="stylesheet" href="/app.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">





<h1 id="title" class=" text-center">Promotion Management</h1>
<div id="display">
    <a  href="/add"><button id="click">Add a promotion</button></a>   
    <input class="form-outline"  type="text" id="search"  placeholder="Search">
    <table class="table table-sm table-dark" >
    <thead>
        <tr>
            <th scope="col">promotion id</th>

            <th scope="col">promotion name</th>

            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody id="content">
        @foreach ($data as $row)        
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>
                <a  href="Edit/{{$row->id}}"><button class="btn btn-primary">Edit</button></a>
                <a  href="Delete/{{$row->id}}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<script src="/app.js"></script>
