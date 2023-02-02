@extends('admin.adminhome')
@section('content')
    <table id="example1" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Messege</th>

        </tr>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->date }}</td>
                <td>{{ $data->time }}</td>
                <td>{{ $data->masage }}</td>

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
