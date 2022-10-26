<link rel="stylesheet" href="/app.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>




<nav>
    
</nav>


<div id="display">

    <a  href="/add"><button id="click">Add a promotion</button></a>

<table >
    <thead>
        <tr>
            <th>promotion id</th>
            <th>promotion name</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody id="content">
        @foreach ($data as $row)
            
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>
                <a href="Edit/{{$row->id}}"><button>Edit</button></a>
                <a href="Delete/{{$row->id}}"><button>Delete</button></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<input type="text" id="search"  placeholder="Search">

</div>

<script src="/app.js"></script>
