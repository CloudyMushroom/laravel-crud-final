<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body> 
    <!-- FOR READ in CRUD -->

    <h1 class="text-red-300">landing page</h1>
    <form action="{{route('student.create')}}" method="GET">
        <button>CREATE</button>
    </form>
    
    <br>
    <br>
    <br>
    <table border="2">
        <tr>
            <th>Learners Reference Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Learners Age</th>
       
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{$student->LearnersNumber}}</td>
            <td>{{$student->FirstName}}</td>
            <td>{{$student->LastName}}</td>
            <td>{{$student->LearnersAge}}</td>
            <td><a href="{{route('student.edit', $student->id)}}">Edit</a></td>
            <td>
                <form action="{{route('student.delete', $student->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
      
      
    </table>
    
</body>
</html>