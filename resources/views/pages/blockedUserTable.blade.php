@extends('layouts.app')
@section('custom-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedcolumns/4.3.0/css/fixedColumns.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedheader/3.4.0/css/fixedHeader.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs5/2.5.0/responsive.bootstrap5.css" integrity="sha512-2t4gjFFzyJXNMJLOeAw+b8YEqPjqE9CNT/D3IeLJyZFnuIjNeGazimxSWBkwrd6t4CpsvQjkHTuxOEE8jLfYrw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs5/2.5.0/responsive.bootstrap5.min.css" integrity="sha512-8xVwVMaizbgDXKTssq0VfzcSxLQqu7lQFEy0N/TFylIXfYha92XkOu7BmA+/lbhQk1cGI7FtTHHtY6hmOKX0og==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('custom-script')
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs5/2.5.0/responsive.bootstrap5.js" integrity="sha512-Fm+qq7BjMgZHTW1bVE/LPm1FuxhOMeecBhFGvdIVa2iI0utT03KttZMvN+IonvChKivAvnbfdf6jp3beH8lN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs5/2.5.0/responsive.bootstrap5.min.js" integrity="sha512-ttUzgYsudyu2EEX88COgcLtS+AKeZXAzI45jN2iJUIpbtkiH8lgaWtlmLU6BjECAZAyhhn0UdedzR++CZGZiZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#example').DataTable( {
    responsive: true,
    fixedColumns: true,
    fixedHeader: true,
    });
    $('#example tbody').on('click', 'td button', function (){
    //todo
    });
</script>
@endsection
@section('content')
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Blocked Users</h1>
    </div>

        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="p-4">
                    <table id="example" class="table table-hover table-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>IP Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $item)
                            <tr>
                                <td>{{$item['src-address']}}</td>
                                <td>
                                    <a href="{{url('un_block_user')}}?numbers={{$key}}" 
                                       onclick="return confirm('yakin untuk unblock user?')" 
                                       class="btn btn-success">
                                        UnBlock
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection