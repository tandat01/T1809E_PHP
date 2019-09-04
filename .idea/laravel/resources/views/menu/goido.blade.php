@extends("layout")
@section("main_content")
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>TotalMoney</th>
            <th>Date</th>
            <th>Status</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($goidos as $goido)
               <tr>
                   <td>{{$goido->goido_id}}</td>
                   <td>{{$goido->goido_name}}</td>
                   <td>{{$goido->khachhang_id}}</td>
                   <td>{{$goido->TotalMoney}}</td>
                   <td>{{$goido->Date}}</td>
                   <td>{{$goido->Status}}</td>
                   <td>{{$goido->active}}</td>
               </tr>
            @endforeach
        </tbody>
    </table>


@endsection