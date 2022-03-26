@extends("admin.layouts.layout")
@section("content")

    <div class="container">
        <a href="{{route('create.admin')}}" class="btn btn-success m-4">add admin</a>
        <table class="table table-striped">
            <tr>
                <th>id</th>  <th>name</th>  <th>email </th>  <th>password</th> <th>image</th>
            </tr>

            @foreach(\App\Models\Admin::all() as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td> <img width="100" src="{{asset('storage/'.$item->image)}}"> </td>
                    <td>
                        <a href="{{url('/delete-admin/'.$item->id)}}" class="btn btn-danger"> delete</a>
                        <a href="{{url('/edit-admin/'.$item->id)}}" class="btn btn-info">edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
