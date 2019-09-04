@extends("layout")
@section("main_content")
    <form action="{{url("/them-nhanvien")}}" method="post">
        @csrf
        <div class="form-group">
            <label> Nhanvien_name</label>
            <input type="text" class="form-control" name="nhanvien_name" value="{{old("nhanvien_name")}}" placeholder="Nhan vien">
            @if($errors->has("nhanvien_name"))
                <p class="error" style="color: red">{{$errors->first("nhavien_name")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>sex</label>
            <input type="text" class="form-control" name="sex" value="{{old("sex")}}" placeholder="sex">
            @if($errors->has("sex"))
                <p class="error" style="color: red">{{$errors->first("sex")}}</p>
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
            <label>phonenumber</label>
            <input type="text" class="form-control" name="phonenumber" value="{{old("phonenumber")}}" placeholder="Phonenumber">
            @if($errors->has("phonenumber"))
                <p class="error" style="color: red">{{$errors->first("phonenumber")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" class="form-control" name="email" value="{{old("email")}}" placeholder="Email">
            @if($errors->has("email"))
                <p class="error" style="color: red">{{$errors->first("email")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>bitthday</label>
            <input type="text" class="form-control" name="birthday" value="{{old("birthday")}}" placeholder="birthday">
            @if($errors->has("birthday"))
                <p class="error" style="color: red">{{$errors->first("birthday")}}</p>
            @endif
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger">Submit</button>
        </div>
    </form>
@endsection