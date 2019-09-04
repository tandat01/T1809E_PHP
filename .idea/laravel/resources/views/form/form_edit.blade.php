@extends("layout")

@section("main_content")
    <form action="{{url("/sua-danhmuc")}}" method="post">
        @csrf
        <input type="hidden" name="danhmuc_id" value="{{$danhmucs->danhmuc_id}}">
        <div class="form-group">
            <label> Danhmuc </label>
            <input type="text" class="form-control" name="danhmuc_name" value="{{old("danhmuc_name")}}" placeholder=" danh muc">
            @if($errors->has("danhmuc_name"))
                <p class="error" style="color: red">{{$errors->first("danhmuc_name")}}</p>
            @endif

        </div>
        <div class="form-group">
            <label>content</label>
            <input type="text" class="form-control" name="content" value="{{old("content")}}" placeholder="more content">
            @if($errors->has("content"))
                <p class="error" style="color: red">{{$errors->first("more")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>images</label>
            <input type="text" class="form-control" name="images" value="{{old("images")}}" placeholder="more images">
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