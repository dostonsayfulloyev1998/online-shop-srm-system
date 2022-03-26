@extends("admin.layouts.layout")
@section("content")

     <div class="container w-50">
         <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
                 <label for="">name</label>
                 <input type="text" name="name" class="form-control">
             </div>

             <div class="form-group">
                 <label for="">price</label>
                 <input type="text" name="price" class="form-control">
             </div>

             <label for="">category</label>
             <select name="c_id" class="form-control">
                 <option value="" selected disabled>choose category</option>
                 @foreach(\App\Models\Category::all() as $item)
                     <option value="{{$item->id}}">{{$item->name}} </option>
                 @endforeach
             </select>

             <div class="form-group">
                 <label for="">image</label>
                 <input type="file" name="image" class="form-control">
             </div>

             <input type="submit" class="btn btn-primary" value="add product">
         </form>
     </div>

@endsection
