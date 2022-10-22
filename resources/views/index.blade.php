<link rel="stylesheet" href="/app.css">



<div id="display">

    <a  href="/add"><button id="click">Add a promotion</button></a>

<table id="content">
    <thead>
        <tr>
            <th>promotion id</th>
            <th>promotion name</th>
            
        </tr>
    </thead>
    <tbody>
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
</div>