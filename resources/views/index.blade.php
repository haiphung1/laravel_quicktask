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
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> {{ __('messages.delete') }}
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
