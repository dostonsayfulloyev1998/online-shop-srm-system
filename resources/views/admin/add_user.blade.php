@extends("admin.layouts.layout")
@section("content")

    <div class="container w-50">
        <form action="{{route('store.admin')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="">name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="">password</label>
                <input type="text" name="password" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="add user">
        </form>
    </div>

@endsection
