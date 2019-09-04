@extends("layout")

@section("main_content")
    <form action="{{url("/sua-nhanvien")}}" method="post">
        @csrf
        <input type="hidden" name="nhanvien_id" value="{{$nhanviens->nhanvien_id}}">
        <div class="form-group">
            <label> Nhan vien </label>
            <input type="text" class="form-control" name="nhanvien_name" value="{{old("nhanvien_name")}}" placeholder=" Name">
            @if($errors->has("nhanvien_name"))
                <p class="error" style="color: red">{{$errors->first("nhanvien_name")}}</p>
            @endif

        </div>
        <div class="form-group">
            <label>Sex</label>
            <input type="text" class="form-control" name="sex" value="{{old("sex")}}" placeholder="Giới tính">
            @if($errors->has("sex"))
                <p class="error" style="color: red">{{$errors->first("sex")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="text" class="form-control" name="birthday" value="{{old("birthday")}}" placeholder="">
            @if($errors->has("images"))
                <p class="error" style="color: red">{{$errors->first("images")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>describe</label>
            <input type="text" class="form-control" name="describe" value="{{old("describe")}}" placeholder="more describe">
            @if($errors->has("describe"))
                <p class="error" style="color: red">{{$errors->first("describe")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>status</label>
            <input type="text" class="form-control" name="status" value="{{old("status")}}" placeholder="more status">
            @if($errors->has("status"))
                <p class="error" style="color: red">{{$errors->first("status")}}</p>
            @endif
        </div>


        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger">Cập nhật danh muc</button>
        </div>
    </form>

@endsection