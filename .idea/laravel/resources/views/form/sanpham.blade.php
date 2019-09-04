@extends("layout")
@section("main_content")
    <form action="{{url("/them-sanpham")}}" method="post">
        @csrf
        <div class="form-group">
            <label> Sanpham_name</label>
            <input type="text" class="form-control" name="sanpham_name" value="{{old("sanpham_name")}}" placeholder=" San pham">
            @if($errors->has("sanpham_name"))
                <p class="error" style="color: red">{{$errors->first("sanpham_name")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>detail</label>
            <input type="text" class="form-control" name="detail" value="{{old("detail")}}" placeholder="more detail">
            @if($errors->has("detail"))
                <p class="error" style="color: red">{{$errors->first("detail")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="text" class="form-control" name="price" value="{{old("price")}}" placeholder="more price">
            @if($errors->has("price"))
                <p class="error" style="color: red">{{$errors->first("price")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>status</label>
            <input type="text" class="form-control" name="status" value="{{old("status")}}" placeholder="more status">
            @if($errors->has("status"))
                <p class="error" style="color: red">{{$errors->first("status")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>image</label>
            <input type="text" class="form-control" name="image" value="{{old("image")}}" placeholder="more image">
            @if($errors->has("image"))
                <p class="error" style="color: red">{{$errors->first("image")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="">Danh muc</label>
            <select class="form-control" name="danhmuc_id" id="">
                @foreach ($danhmucs as $danhmuc)
                    <option value="{{ $danhmuc -> danhmuc_id }}">
                        {{ $danhmuc -> danhmuc_id }} . {{ $danhmuc -> danhmuc_name }}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="form-group text-right">
            <button type="submit" class="btn btn-outline-danger">Submit</button>
        </div>

    </form>
@endsection