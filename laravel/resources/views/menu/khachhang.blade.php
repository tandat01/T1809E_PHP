@extends("layout")
@section("main_content")
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>Active</th>
        </thead>
        <tbody>
        @foreach($khachhangs as  $khachhang)
            <tr>
                <td>{{$khachhang->khachhang_id}}</td>
                <td>{{$khachhang->khachhang_name}}</td>
                <td>{{$khachhang->Birthday}}</td>
                <td>{{$khachhang->Address}}</td>
                <td>{{$khachhang->Email}}</td>
                <td>{{$khachhang->PhoneNumber}}</td>
                <td>{{$khachhang->Active}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection