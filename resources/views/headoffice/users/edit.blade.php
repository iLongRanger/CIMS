@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen" xmlns:margin-right="http://www.w3.org/1999/xhtml"
         xmlns:border-radius="http://www.w3.org/1999/xhtml" xmlns:float="http://www.w3.org/1999/xhtml"
         xmlns:height="http://www.w3.org/1999/xhtml">

        <div class="row">
            <!--<div class="col-md-8 col-md-offset-2">-->

            <!-- Default box -->
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Update/View User Information</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>  <!-- /.box -->
            </div><!-- /.box info -->
        </div><!-- /.row -->
    </div>


    <div class = row>
        <div class="box-body">

            <div class = col-md-3>
                <img src="{{$user->photo ? $user->photo->file:'/img/avatar.png'}}" alt="" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            </div>

            <div class = col-md-9>
                @include('includes.form_error')


                {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update', $user->id], 'files'=> true])!!}


                <div class="form-group">
                    {!!Form::label('name', 'Name:')!!}
                    {!!Form::text('name', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('email', 'Email:')!!}
                    {!!Form::email('email', null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('role_id', 'Role:')!!}
                    {!!Form::select('role_id', [''=>'Choose Position'] + $roles, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group form-control-required">
                    {!!Form::label('department_id', 'Department:')!!}
                    {!!Form::select('department_id', [''=>'Choose Department'] + $departments, null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('is_active', 'Status:')!!}
                    {!!Form::select('is_active', array(1=>'Active',0=>'Inactive'),null,  ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('photo_id', 'Photo:')!!}
                    {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('password', 'Password:')!!}
                    {!!Form::password('password', ['class'=>'form-control'])!!}
                </div>

                <div class = "form-group">
                    {!!Form::submit('Update User', ['class'=>'btn btn-primary'])!!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div><!-- /.box-body -->
    </div><!--/.row-->

    </div>

@endsection
