@extends('layouts.app')

@section('title', 'List task')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ __('messages.list') }}
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>{{ __('messages.task') }}</th>
                            <th>&nbsp</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td class="td-with">
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> {{ __('messages.delete') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row justify-content-center">
            <div class="col-6">
                <div class="panel-body">
                    <form action="{{ route('tasks.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('messages.name') }} <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="{{ __('messages.name') }}"/>
                            @foreach ($errors->all() as $errors)
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $errors }}
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-success mt-2">{{ __('messages.save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
