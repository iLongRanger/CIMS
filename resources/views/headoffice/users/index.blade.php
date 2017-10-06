@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">System Users</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="box box-primary">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="users-table" class="table table-striped">
                                                    <thead>
                                                    <th>
                                                        <a class="action-create-entry" href="/users/create">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </th>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Created At</th>
                                                        <th>Last Updated</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- ./box-body -->
                                </div><!-- /.box -->
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </div>
    </div>

@endsection

@stack('scripts')
@push('scripts')
    <script type="text/javascript">
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'http://cims.dev/users/datatable',
                columns: [

                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ]
            });
        });
    </script>
@endpush
