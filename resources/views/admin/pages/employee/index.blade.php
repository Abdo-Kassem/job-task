@extends('Admin.layouts.master')

@section('pageTitle') <i class="fa fa-user-plus"></i> الموظفين @endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title">
                معلومات الموظفين
                
            </h3>
            
            <div class="button-page-header">
                <a class="btn btn-block btn-primary" href="{{ route('employees.create') }}">
                <i class="fa fa-plus-circle fa-fw fa-lg"></i> اضافة موظف</a>
            </div>
            
            
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="yajra-datatable" class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><b>الصوره</b></th>
                            <th><b>الاسم</b></th>
                            <th><b>الايميل</b></th>
                            <th><b>رقم التلفون</b></th>
                            <th><b>التاريخ</b></th>
                            <th width="8%"><b>اداره</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $employees as $index => $employee )
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img style="width:50px;height:50px;object-fit:contain" src="{{ asset($employee->avatar) }}" alt="">
                                </td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="btn-group manage-button" title="View Account">
                                        <a class="btn btn-primary btn-o dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                            <i class="fa fa-cog"></i> <span class="caret"></span>
                                        </a>
                                        <ul role="menu" class="dropdown-menu dropdown-light pull-right">

                                            <li>
                                                <a title="{{ trans('backend.show') }} {{ trans('backend.record') }}" href="{{ route('employees.show' , $employee->id) }}">
                                                    <i class="fas fa-eye"></i> عرض
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a title="{{ trans('backend.edit') }} {{ trans('backend.record') }}" href="{{ route('employees.edit' , $employee->id) }}">
                                                    <i class="fas fa-edit"></i> تعديل
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <form action="{{ route('employees.destroy' , $employee->id) }}" method="POST" style="display:inline">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button title="{{ trans('backend.edit') }} {{ trans('backend.record') }}" type="submit"  class="delete" style="cursor:pointer">
                                                        <i class="fas fa-trash-alt"></i> حذف
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function(){
            var table = $('#yajra-datatable').DataTable();
        });
    </script>
@endpush