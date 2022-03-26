@extends("admin.layouts.layout")
@section("content")

<div class="container">
    <a href="{{route('create.category')}}" class="btn btn-success m-4">add category</a>
    <table class="table table-striped">
        <tr>
            <th>id</th>  <th>name</th>  <th>image</th>
        </tr>

        @foreach(\App\Models\Category::all() as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>

                <td> <img width="100" src="{{asset('storage/'.$item->image)}}"> </td>
                <td>
                    <a href="{{url('/delete-category/'.$item->id)}}" class="btn btn-danger">delete</a>
                    <a href="{{url('/edit-category/'.$item->id)}}" class="btn btn-info">edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
