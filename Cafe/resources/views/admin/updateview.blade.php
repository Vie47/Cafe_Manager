<base href="/public">
@extends('admin.adminhome')
@section('content')


    <form method="post" action="{{url('/update',$data->id)}}" enctype="multipart/form-data">

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="num" name="price" class="form-control" id="price" placeholder="price" value="{{$data->price}}">
            </div>
            <div class="form-group">
                <label for="image">Old Image</label>
                <img height="200" width="200" src="/drinkimage/{{$data->image}}">
            </div>
            <div class="form-group">
                <label for="image">New Image</label>
                <input type="file" name="image" class="form-control" id="image" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{$data->description}}">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#staff_manage').addClass('active');
            $('#staff').addClass('menu-open');
            $('#staff_list').addClass('active');
        });
    </script>
@endpush
