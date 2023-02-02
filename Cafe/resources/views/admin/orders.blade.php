@extends('admin.adminhome')
@section('content')
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>

            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Drinkname</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->drinkname }}</td>
                <td>{{ $data->price }}đ</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->price * $data->quantity }}đ</td>

            </tr>
        @endforeach
        </tbody>

    </table>
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
