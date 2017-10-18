@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')

    @if(Session::has('deleted_employee'))

        <p class="alert alert-danger">{{session('deleted_employee')}}</p>
    @endif

    @if(Session::has('created_employee'))

        <p class="alert alert-success">{{session('created_employee')}}</p>
    @endif

    @if(Session::has('updated_employee'))

        <p class="alert alert-warning">{{session('updated_employee')}}</p>
    @endif

@endsection
