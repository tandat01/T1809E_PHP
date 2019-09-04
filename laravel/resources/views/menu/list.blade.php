@extends("layout")
@section("main_content")
    <div class="table-responsive m-b-40">
    <table class="table table-hover">

            @if(Session::has("success"))
                <p style="color: green">{{Session::get("success")}}</p>
            @endif
            @if($errors->has("fail"))
                <p style="color: red">{{$errors->first("fail")}}</p>
            @endif
        <h1 style="text-align: center ; color: blue">Danh Muc</h1>
                <a href="{{url("/them-danhmuc")}}" class="btn btn-primary">Them danh muc</a>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Content</th>
        <th>Images</th>
        <th>Describe</th>
        <th>Status</th>
        <th>Active</th>
        </thead>
        <tbody>
        @foreach($danhmucs as $danhmuc)
            <tr>
                <td>{{$danhmuc->danhmuc_id}}</td>
                <td>{{$danhmuc->danhmuc_name}}</td>
                <td>{{$danhmuc->content}}</td>
                <td>{{$danhmuc->images}}</td>
                <td>{{$danhmuc->describe}}</td>
                <td>{{$danhmuc->status}}</td>
                <td>{{$danhmuc->active}}</td>
                <td><a href="{{url("sua-danhmuc?id=".$danhmuc->danhmuc_id)}}">Edit</a> </td>
                <td><a onclick="return confirm('Are you sure?')" href="{{url("xoa-danhmuc/".$danhmuc->danhmuc_id)}}">Delete</a> </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
@endsection
