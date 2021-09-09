@extends('layouts.master')

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Responsive Hover Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>{{ __('lang.id') }}</th>
                                <th>{{ __('lang.name') }}</th>
                                <th>{{ __('lang.control') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>
                                        <a href="{{ route('courses.show', ['id' => $course->id]) }}"
                                            class="btn btn-info" title="{{ __('lang.show') }}">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="{{ route('courses.edit', ['id' => $course->id]) }}"
                                            class="btn btn-secondary" title="{{ __('lang.edit') }}">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="{{ route('courses.destroy', $course->id) }}" method="post"
                                            onsubmit="return confirm('Are you sure to delete this?')"
                                            style="display: inline-block;">
                                            @csrf
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <!-- Check if no data is found!: HTML -->
                    {{-- Check if no data is found!: Blade --}}
                    @if ($result->isEmpty())
                        <div class="alert alert-danger">
                            {{ __('lang.no_data') }}
                        </div>
                    @endif

                </div>
                <div class="card-footer">
                    {{ $result->links() }}
                </div>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
