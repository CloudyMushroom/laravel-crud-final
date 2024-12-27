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
    <form action="{{route('student.create')}}" method="POST">
        @csrf
        <input type="text" name="LearnersNumber" placeholder="Learner's Reference Number">
        <input type="text" name="FirstName" placeholder="First Name">
        <input type="text" name="LastName" placeholder="Last Name">
        <input type="number" name="LearnersAge" placeholder="LearnersAge">

        <button>Submit</button>    

    </form>

</body>
</html>