<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('student.update', $student->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="LearnersNumber" value="{{ $student->LearnersNumber }}">
        <input type="text" name="FirstName" value="{{ $student->FirstName }}">
        <input type="text" name="LastName" value="{{ $student->LastName }}">
        <input type="text" name="LearnersAge" value="{{ $student->LearnersAge }}">

        <button type="submit">Update</button>

    </form>
</body>
</html>