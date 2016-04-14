@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Display Validation Errors -->
            @include('common.errors')
            <p>
                <a href="{{route('lunchlist.create')}}" class="btn btn-primary btn-block btn-lg">New Lunch List</a>
            </p>
            <div class="panel panel-default">
                <div class="panel-heading">Lunch List Overview</div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Opened On</th>
                        <th>Closed On</th>
                        <th>Amount</th>
                        <th>Veggy</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lists as $list)
                        <tr>
                            <th scope="row">{{$list->id}}</th>
                            <td><a href="{{route('lunchlist.edit',[$list->id])}}">{{$list->opened_on}}</a></td>
                            <td>{{$list->closed_on}}</td>
                            <td>{{count($list->names)}}</td>
                            <td>
                                @if($list->veggy)
                                    Yes
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
