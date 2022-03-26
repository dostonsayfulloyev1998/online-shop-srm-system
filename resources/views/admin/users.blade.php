@extends("admin.layouts.layout")
@section("content")
    <div class="container">
        <a href="{{route('create.user')}}" class="btn btn-success m-4">add user</a>
        <table class="table table-striped">
            <tr>
                <th>id</th>  <th>name</th>  <th>email </th>  <th>password</th>
            </tr>

            @foreach(\App\Models\User::all() as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td>
                        <a href="{{url('/delete-user/'.$item->id)}}" class="btn btn-danger">delete </a>
                        <a href="{{url('/edit-user/'.$item->id)}}" class="btn btn-info">edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
