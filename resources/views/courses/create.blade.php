@extends('layouts.master')

@section('title')
{{ __('lang.add_course') }}
@endsection

@section('content')
<h3>{{ __('lang.add_course') }}</h3>
<section class="content">
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Course data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ url('courses') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('lang.name') }}</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="{{ trans('lang.name') }}" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="desc">{{ trans('lang.desc') }}</label>
                            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control" placeholder="{{ __('lang.desc') }}"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
