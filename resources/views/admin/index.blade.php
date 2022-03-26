@extends("admin.layouts.layout")
@section("content")
<div class="container">
    <a href="{{route('create.product')}}" class="btn btn-success m-4">add product</a>
      <table class="table table-striped">
            <tr>
               <th>id</th>  <th>name</th>  <th>price </th>  <th>image</th>
            </tr>

          @foreach(\App\Models\Product::all() as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td> <img width="100" src="{{asset('storage/'.$item->image)}}"> </td>
                    <td>
                        <a href="{{url('/delete/'.$item->id)}}" class="btn btn-danger">delete</a>
                        <a href="{{url('/edit/'.$item->id)}}" class="btn btn-info">edit</a>
                    </td>
                </tr>
          @endforeach
      </table>
</div>
@endsection
