@extends('layouts.master')

@section('title')
{{ "Edit ".$pageTitle }}
@endsection

@section('content')
<h3>Edit {{ $pageTitle }}</h3>
<section class="content">
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $pageTitle }} data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('courses.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('lang.name') }}</label>
                            {{-- <input type="text" name="name" value="{{ old('name', $item->name) }}" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('lang.name') }}" autocomplete="off"> --}}
                            <input type="text" name="name" value="{{ $item->name }}" class="form-control" id="name" placeholder="{{ trans('lang.name') }}" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="desc">{{ trans('lang.desc') }}</label>
                            <input type="text" name="desc" value="{{ $item->desc }}" class="form-control" id="desc" placeholder="{{ trans('lang.desc') }}" autocomplete="off">
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
