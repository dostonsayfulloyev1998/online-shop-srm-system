@extends("admin.layouts.layout")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('update.category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$category['id']}}">
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control" value="{{$category['name']}}">
                </div>

                <div class="form-group">
                    <label for="">image</label>
                    <input type="file" name="image" class="form-control" value="{{$category['image']}}">
                </div>

                <input type="submit" class="btn btn-primary" value="update category">
            </form>
        </div>

        <div class="col-md-6">
            <img src="{{asset("storage/".$category['image'])}}" width="300" alt="">
        </div>
    </div>
</div>
@endsection
