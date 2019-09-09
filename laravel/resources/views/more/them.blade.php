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
<form action="{{url("/them-student")}}" method="post">
    @csrf
    <div class="form-group">
        <label> Name</label>
        <input type="text" class="form-control" name="student_name" value="{{old("student_name")}}" placeholder=" name">
        @if($errors->has("student_name"))
            <p class="error" style="color: red">{{$errors->first("student_name")}}</p>
        @endif

    </div>
    <div class="form-group">
        <label>age</label>
        <input type="number" class="form-control" name="age" value="{{old("age")}}" placeholder="age">
        @if($errors->has("age"))
            <p class="error" style="color: red">{{$errors->first("age")}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>address</label>
        <input type="text" class="form-control" name="address" value="{{old("address")}}" placeholder="address">
        @if($errors->has("address"))
            <p class="error" style="color: red">{{$errors->first("address")}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>telephone</label>
        <input type="number" class="form-control" name="telephone" value="{{old("telephone")}}" placeholder="telephone">
        @if($errors->has("telephone"))
            <p class="error" style="color: red">{{$errors->first("telephone")}}</p>
        @endif
    </div>

    <div class="form-group text-right">
        <button type="submit" class="btn btn-outline-danger">Submit</button>
    </div>

</form>

</div>
</body>
</html>