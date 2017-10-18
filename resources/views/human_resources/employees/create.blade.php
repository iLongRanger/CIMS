@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


    <div class="col-md-12">
        <h3 class ="text-success text-capitalize text-center">Create new employee record</h3>

    </div>
    <div class="col-md-12">
        <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#personal" data-toggle="tab">
                        <img src="/img/icons/personal.png" width="50" height="50" alt="Personal Information" toggle="tooltip" title="Personal Information"/>
                    </a>
                </li>
                <li>
                    <a href="#contact" data-toggle="tab">
                        <img src="/img/icons/contact.png" width="50" height="50" alt="Contact Information" toggle="tooltip" title="Contact Information"/>
                    </a>
                </li>
                <li>
                    <a href="#emergency" data-toggle="tab">
                        <img src="/img/icons/emergency.png" width="50" height="50" alt="Emergency Contact Number" toggle="tooltip" title="Emergency Contact Number"/>
                    </a>
                </li>
                <li>
                    <a href="#job" data-toggle="tab">
                       <img src="/img/icons/job.png" width="50" height="50" alt="Job Title" toggle="tooltip" title="Job Title"/>
                    </a>

                </li>

            </ul>
            {!! Form::open(['method'=>'POST', 'action'=>'EmployeesController@store', 'files'=> true])!!}
                <div class="tab-content">
                    <div class="active tab-pane box-body" id="personal">
                        <div class="alert alert-info alert-dismissible">
                        <p>Personal Information</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                {!!Form::label('photo_id', 'Employee Photo (200x200px)')!!}
                                {!!Form::file('photo_id',null , ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('lastname', 'Last name')!!}
                                {!!Form::text('lastname', null, ['class'=>'form-control','placeholder'=>'Enter last Name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('firstname', 'First name')!!}
                                {!!Form::text('firstname', null, ['class'=>'form-control','placeholder'=>'Enter first Name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('middlename', 'Middle name')!!}
                                {!!Form::text('middlename', null, ['class'=>'form-control','placeholder'=>'Enter middle Name'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('street', 'Street')!!}
                                {!!Form::text('street', null, ['class'=>'form-control','placeholder'=>'Enter street name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('houseno', 'House Number')!!}
                                {!!Form::text('houseno', null, ['class'=>'form-control','placeholder'=>'Enter house number'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('brgy', 'Barangay')!!}
                                {!!Form::text('brgy', null, ['class'=>'form-control','placeholder'=>'Enter city'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('city', 'City')!!}
                                {!!Form::text('city', null, ['class'=>'form-control','placeholder'=>'Enter city'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('region', 'Region')!!}
                                {!!Form::text('region', null, ['class'=>'form-control','placeholder'=>'Enter region'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('zipcode', 'Zipcode')!!}
                                {!!Form::text('zipcode', null, ['class'=>'form-control','placeholder'=>'Enter zipcode'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('birthdate', 'Birth Date')!!}
                                {!!Form::text('birthdate', null, ['class'=>'form-control','placeholder'=>'MM/DD/YYYY'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('birthplace', 'Birth Place')!!}
                                {!!Form::text('birthplace', null, ['class'=>'form-control','placeholder'=>'City Name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('marital_id', 'Status')!!}
                                {!!Form::text('marital_id', null, ['class'=>'form-control','placeholder'=>'change this to drop down list'])!!}
                            </div>

                        </div>
                    </div><!--END PERSONAL TAB-->

                    <div class="tab-pane box-body" id="contact">
                        <div class="alert alert-info alert-dismissible">
                            <p>Contact Information</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('phone', 'Phone number')!!}
                                {!!Form::text('phone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('aphone', 'Alternate Phone number')!!}
                                {!!Form::text('aphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('hphone', 'Home Phone number')!!}
                                {!!Form::text('hphone', null, ['class'=>'form-control','placeholder'=>'000-00-00'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('email', 'Email Address')!!}
                                {!!Form::email('email', null, ['class'=>'form-control','placeholder'=>'example@domain.com'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('facebook', 'Facebook Link')!!}
                                {!!Form::text('facebook', null, ['class'=>'form-control','placeholder'=>'facebook.com/username'])!!}
                            </div>
                        </div>
                    </div><!--END OF  CONTACT INFORMATION-->
                    <div class="tab-pane box-body" id="emergency">
                        <div class="alert alert-info alert-dismissible">
                            <p>Emergency Contact Person</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('ename', 'Full name')!!}
                                {!!Form::email('ename', null, ['class'=>'form-control','placeholder'=>'Enter full name'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('relationship', 'Relationship')!!}
                                {!!Form::text('relationship', null, ['class'=>'form-control','placeholder'=>'Enter relationship'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('ephone', 'Phone number')!!}
                                {!!Form::text('ephone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('ealphone', 'Alternate Phone number')!!}
                                {!!Form::text('ealphone', null, ['class'=>'form-control','placeholder'=>'0000-000-0000'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('eaddress', 'Address')!!}
                                {!!Form::text('eaddress', null, ['class'=>'form-control','placeholder'=>'Enter complete address'])!!}
                            </div>
                        </div>
                    </div><!--END OF  EMERGENCY CONTACT PERSON-->
                    <div class="tab-pane box-body" id="job">
                        <div class="alert alert-info alert-dismissible">
                            <p>Job Title</p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('employeeid', 'Employee Identification number')!!}
                                {!!Form::text('employeeid', null, ['class'=>'form-control','placeholder'=>'Enter id number'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('role_id', 'Position')!!}
                                {!!Form::email('role_id', null, ['class'=>'form-control','placeholder'=>'change to drop down list'])!!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                {!!Form::label('startdate', 'Start Date')!!}
                                {!!Form::text('startdate', null, ['class'=>'form-control','placeholder'=>'MM/DD/YYYY'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('department_id', 'Department')!!}
                                {!!Form::text('department_id', null, ['class'=>'form-control','placeholder'=>'Enter Department'])!!}
                            </div>
                            <div class="form-group col-md-4">
                                {!!Form::label('salary', 'Salary')!!}
                                {!!Form::text('salary', null, ['class'=>'form-control','placeholder'=>'.00'])!!}
                            </div>
                            <div class = "form-group pull-left col-md-3">
                                {!!Form::submit('Create Employee Record', ['class'=>'btn btn-success'])!!}
                            </div>
                        </div>
                    </div><!--END OF JOB TITLE-->
                </div><!-- /.tab content -->
            {!! Form::close() !!}
        </div> <!-- /.nav custom tab -->
    </div> <!-- /.end col -->

@endsection
