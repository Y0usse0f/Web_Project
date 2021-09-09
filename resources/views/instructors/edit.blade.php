@extends('layouts.master')

@section('title')
{{ "Edit instructor" }}
@endsection

@section('content')
<h3>Edit instructor</h3>
<section class="content">
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Instructor data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('instructors.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('lang.name') }}</label>
                            {{-- <input type="text" name="name" value="{{ old('name', $item->name) }}" class="form-control" id="name" placeholder="{{ trans('lang.name') }}" autocomplete="off"> --}}
                            <input type="text" name="name" value="{{ $item->name }}" class="form-control" id="name" placeholder="{{ trans('lang.name') }}" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="email">{{ trans('lang.email') }}</label>
                            <input type="email" name="email" value="{{ $item->email }}" class="form-control" id="email" placeholder="{{ trans('lang.email') }}" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ trans('lang.phone') }}</label>
                            <input type="text" name="phone" value="{{ $item->phone }}" class="form-control" id="phone" placeholder="{{ trans('lang.phone') }}" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('lang.password') }}</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="{{ __('lang.password') }}">
                        </div>
                        <div class="form-group">
                            <label for="file">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="avatar" class="custom-file-input" id="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
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
