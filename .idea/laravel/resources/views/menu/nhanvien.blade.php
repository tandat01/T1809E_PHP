@extends("layout")
@section("main_content")
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Address</th>
            <th>PhoneNumber</th>
            <th>email</th>
            <th>Birthday</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($nhanviens as $nhanvien)
               <tr>
                   <td>{{$nhanvien->nhanvien_id}}</td>
                   <td>{{$nhanvien->nhanvien_name}}</td>
                   <td>{{$nhanvien->goido_id}}</td>
                   <td>{{$nhanvien->sex}}</td>
                   <td>{{$nhanvien->address}}</td>
                   <td>{{$nhanvien->phonenumber}}</td>
                   <td>{{$nhanvien->email}}</td>
                   <td>{{$nhanvien->birthday}}</td>
                   <td>{{$nhanvien->active}}</td>
               </tr>

             @endforeach
        </tbody>

    </table>

@endsection