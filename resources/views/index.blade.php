<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>result</title>
</head>
<body>
    record inserted !
    @foreach ($data as $row)
    <div> id is : {{ $row->id }}, name is : {{ $row->name }} </div>
@endforeach

</body>
</html>