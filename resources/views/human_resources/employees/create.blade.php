@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

    <h3 class="box-title">Create New Employee Record</h3>

    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <h3 class="box-title">Personal Information</h3>
                </div>

                @include('includes.form_error')
                {!! Form::open(['method'=>'POST', 'action'=>'DepartmentController@store', 'files'=> true])!!}
                    <div class="box-body">
                        <div class="form-group">
                            {!!Form::label('lastname', 'Last Name:')!!}
                            {!!Form::text('lastname', null, ['class'=>'form-control','placeholder'=>'Enter last Name'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('firstname', 'First Name:')!!}
                            {!!Form::text('firstname', null, ['class'=>'form-control','placeholder'=>'Enter First Name'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('middlename', 'Middle Name:')!!}
                            {!!Form::text('middlename', null, ['class'=>'form-control','placeholder'=>'Enter middle name'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('age', 'Age:')!!}
                            {!!Form::text('age', null, ['class'=>'form-control','placeholder'=>'Enter age'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('bday', 'Birthday:')!!}
                            {!!Form::text('bday', null, ['class'=>'form-control','placeholder'=>'mm/dd/yyyy'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('bplace', 'Birth Place:')!!}
                            {!!Form::text('bplace', null, ['class'=>'form-control','placeholder'=>'Enter birth place'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('marital', 'Marital Status:')!!}
                            {!!Form::text('marital', null, ['class'=>'form-control','placeholder'=>'This should be a drop down list'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('sname', 'Spouse Name:')!!}
                            {!!Form::text('sname', null, ['class'=>'form-control','placeholder'=>'Enter spouse name'])!!}
                        </div>

                    </div>
                <!--form-->
            </div>
        </div>

        <!-- right column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <h3 class="box-title">Contact Information</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        {!!Form::label('email', 'Email Address:')!!}
                        {!!Form::text('email', null, ['class'=>'form-control','placeholder'=>'example@example.com'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('phone', 'Phone Number:')!!}
                        {!!Form::text('phone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('home', 'Home Number:')!!}
                        {!!Form::text('home', null, ['class'=>'form-control','placeholder'=>'000-00-00'])!!}
                    </div>
                </div>
            </div>

            <div class="box box-info">
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <h3 class="box-title">Emergency Contact Information</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        {!!Form::label('ecname', 'Full Name:')!!}
                        {!!Form::text('ecname', null, ['class'=>'form-control','placeholder'=>'Enter Full Name'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecphone', 'Phone Number:')!!}
                        {!!Form::text('ecphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecaddress', 'Address:')!!}
                        {!!Form::text('ecaddress', null, ['class'=>'form-control','placeholder'=>'Enter address'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecrelationship', 'Relationship:')!!}
                        {!!Form::text('ecrelationship', null, ['class'=>'form-control','placeholder'=>'Enter relationship'])!!}
                    </div>

                </div>
            </div>
        </div>

    </div><!--/row-->

    <div class="box box-info">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <h3 class="box-title">Job Information</h3>
        </div>
        <div class="row">
            <div class ="col-md-6">
                <div class="box-body">
                    <div class="form-group">
                        {!!Form::label('ecname', 'Full Name:')!!}
                        {!!Form::text('ecname', null, ['class'=>'form-control','placeholder'=>'Enter Full Name'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecphone', 'Phone Number:')!!}
                        {!!Form::text('ecphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecaddress', 'Address:')!!}
                        {!!Form::text('ecaddress', null, ['class'=>'form-control','placeholder'=>'Enter address'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecrelationship', 'Relationship:')!!}
                        {!!Form::text('ecrelationship', null, ['class'=>'form-control','placeholder'=>'Enter relationship'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecname', 'Full Name:')!!}
                        {!!Form::text('ecname', null, ['class'=>'form-control','placeholder'=>'Enter Full Name'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecphone', 'Phone Number:')!!}
                        {!!Form::text('ecphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                    </div>
                </div>
            </div><!--1st column-->
            <div class ="col-md-6">
                <div class="box-body">
                    <div class="form-group">
                        {!!Form::label('ecname', 'Full Name:')!!}
                        {!!Form::text('ecname', null, ['class'=>'form-control','placeholder'=>'Enter Full Name'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecphone', 'Phone Number:')!!}
                        {!!Form::text('ecphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecaddress', 'Address:')!!}
                        {!!Form::text('ecaddress', null, ['class'=>'form-control','placeholder'=>'Enter address'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecrelationship', 'Relationship:')!!}
                        {!!Form::text('ecrelationship', null, ['class'=>'form-control','placeholder'=>'Enter relationship'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecname', 'Full Name:')!!}
                        {!!Form::text('ecname', null, ['class'=>'form-control','placeholder'=>'Enter Full Name'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('ecphone', 'Phone Number:')!!}
                        {!!Form::text('ecphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                    </div>
                </div>
            </div><!--2nd column-->
        </div><!--/row-->
    </div>

    {!! Form::close() !!}

@endsection
