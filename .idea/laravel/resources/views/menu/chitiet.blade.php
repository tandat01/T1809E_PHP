@extends("layout")
@section("main_content")
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($chitiets as $chitiet)
                <tr>
                    <td>{{$chitiet->chitiet_id}}</td>
                    <td>{{$chitiet->goido_id}}</td>
                    <td>{{$chitiet->sanpham_id}}</td>
                    <td>{{$chitiet->quantity}}</td>
                    <td>{{$chitiet->active}}</td>
                </tr>

             @endforeach
        </tbody>
    </table>

@endsection