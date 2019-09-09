<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">


    <form action="{{url("/sua-student")}}" method="post">
        @csrf
        <h1 style="text-align: center;color: blue">Sua student_</h1>
        <input type="hidden" name="student_id"  value="{{ $student->student_id }}">
        <div class="form-group">
            <label for="">student_name</label>
            <input type="text" name="student_name" id="" class="form-control" value="{{ $student->student_name }}">
            @if($errors -> has("student_name"))
                <p class="error">{{ $errors -> first("student_name") }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="">age</label>
            <input type="number" name="age" id="" class="form-control" value="{{ $student->age }}">
            @if($errors -> has("age"))
                <p class="error">{{ $errors -> first("age") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">address</label>
            <input type="text" name="address" id="" class="form-control" value="{{ $student->address}}">
            @if($errors -> has("address"))
                <p class="error">{{ $errors -> first("address") }}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">telephone</label>
            <input type="text" name="telephone" id="" class="form-control" value="{{ $student->telephone}}">
            @if($errors -> has("telephone"))
                <p class="error">{{ $errors -> first("telephone") }}</p>
            @endif
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger">sửa</button>
        </div>

    </form>

</div>
</body>
</html>