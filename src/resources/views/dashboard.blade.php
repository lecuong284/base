@extends('lecuong::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('lecuong::base.dashboard') }}<small>{{ trans('lecuong::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('lecuong.base.route_prefix', 'admin')) }}">{{ config('lecuong.base.project_name') }}</a></li>
        <li class="active">{{ trans('lecuong::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('lecuong::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('lecuong::base.logged_in') }}</div>
            </div>
        </div>
    </div>
@endsection
