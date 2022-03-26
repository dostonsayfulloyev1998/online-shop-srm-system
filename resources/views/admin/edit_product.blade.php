@extends("ad.minlayouts.layout")
@section("content")

     <div class="container">
         <div class="row">
             <div class="col-md-6">
                 <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$product['id']}}">
                     <div class="form-group">
                         <label for="">name</label>
                         <input type="text" name="name" class="form-control" value="{{$product['name']}}">
                     </div>

                     <div class="form-group">
                         <label for="">price</label>
                         <input type="text" name="price" class="form-control" value="{{$product['price']}}">
                     </div>

                     <div class="form-group">
                         <label for="">image</label>
                         <input type="file" name="image" class="form-control" value="{{$product['image']}}">
                     </div>

                     <input type="submit" class="btn btn-primary" value="add product">
                 </form>
             </div>

             <div class="col-md-6">
                 <img src="{{asset("storage/".$product['image'])}}" width="300" alt="">
             </div>
         </div>
     </div>

@endsection
