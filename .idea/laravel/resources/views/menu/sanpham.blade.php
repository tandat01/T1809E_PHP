@extends("layout")
@section("main_content")
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th>Date</th>
            <th>Pricenew</th>
            <th>Order</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($sanphams as $sanpham)
                <tr>
                    <td>{{$sanpham->sanpham_id}}</td>
                    <td>{{$sanpham->sanpham_name}}</td>
                    <td>{{$sanpham->khachhang_id}}</td>
                    <td>{{$sanpham->Detail}}</td>
                    <td>{{$sanpham->Price}}</td>
                    <td>{{$sanpham->Status}}</td>
                    <td>{{$sanpham->Image}}</td>
                    <td>{{$sanpham->Date}}</td>
                    <td>{{$sanpham->Pricenew}}</td>
                    <td>{{$sanpham->Order}}</td>
                    <td>{{$sanpham->Active}}</td>
                </tr><x></x>
             @endforeach
        </tbody>
    </table>

@endsection