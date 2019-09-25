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
        <h1 style="color: red;text-align: center">Phản hồi</h1>
        <div class="form-group">
            <label> Name</label>
            <input type="text" class="form-control" name="student_name" value="{{old("student_name")}}" placeholder=" name">
            @if($errors->has("student_name"))
                <p class="error" style="color: red">{{$errors->first("student_name")}}</p>
            @endif

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{old("email")}}" placeholder="email">
            @if($errors->has("email"))
                <p class="error" style="color: red">{{$errors->first("email")}}</p>
            @endif
        </div>

        <div class="form-group">
            <label>telephone</label>
            <input type="number" class="form-control" name="telephone" value="{{old("telephone")}}" placeholder="telephone">
            @if($errors->has("telephone"))
                <p class="error" style="color: red">{{$errors->first("telephone")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Feedback</label>
            <input type="text" class="form-control" name="feedback" value="{{old("feedback")}}" placeholder="feedback" style="height: 300px;width: 100%">
            @if($errors->has("feedback"))
                <p class="error" >{{$errors->first("feedback")}}</p>
            @endif
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger" onclick="load()">Submit</button>

        </div>
    </form>

    <script>
        function load(){
            $(document).on('click', '.button', function(e) {
                $.ajax({
                    url: '{{url('/them-student')}}',
                    data: {
                        page: ++page,
                    },
                    method: 'GET',
            }).success(function(data) {
                console.log(data)
                toastr.success('Create successfully !');
            });
        }

    </script>

</div>
</body>
</html>