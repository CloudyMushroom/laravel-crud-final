<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="body"> 
    <!-- FOR READ in CRUD -->

    
    <div class="main-content">
        <livewire:first-component/>
        <h1 class="title">LANDING PAGE</h1>
        <form class="form-btn"action="{{route('student.create')}}" method="GET">
            <button class="btn-create">CREATE</button>
        </form>
        
      
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
                        <button class="btn-delete" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
          
          
        </table>
    </div>
    
    
</body>
</html>