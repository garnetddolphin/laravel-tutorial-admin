@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-content browse container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">{{__('Customer List')}}
                    <button type="button" class="btn btn-sm btn-primary ml-1" onclick="location.href='/customer/create'">
                        {{ __('Add') }}
                    </button>
                </div>
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-hover dataTable">
                                                <thead>
                                                <tr role="row">
                                                    <th>Id</th>
                                                    <th>Prefecture</th>
                                                    <th>City</th>
                                                    <th>Ward</th>
                                                    <th>StreetAddress</th>
                                                    <th>SecondaryAddress</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Name</th>
                                                    <th>PhoneNumber</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($customers as $customer)
                                                    <tr role="row" class="odd">
                                                        <td>{{$customer->id}}</td>
                                                        <td>{{$customer->prefecture}}</td>
                                                        <td>{{$customer->city}}</td>
                                                        <td>{{$customer->ward}}</td>
                                                        <td>{{$customer->streetAddress}}</td>
                                                        <td>{{$customer->secondaryAddress}}</td>
                                                        <td>{{$customer->company}}</td>
                                                        <td>{{$customer->email}}</td>
                                                        <td>{{$customer->lastName}} {{$customer->firstName}}</td>
                                                        <td>{{$customer->phoneNumber}}</td>
                                                        <td>
                                                            <form action="/customer/{{$customer->id}}" method="post">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="delete">
                                                                <button type="submit" class="btn btn-sm btn-danger">
                                                                    {{ __('Delete') }}
                                                                </button>
                                                            </form>
                                                            <a href="/customer/{{$customer->id}}/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">{{__('Edit')}}</span>
                                                            </a>
                                                            <a href="/customer/{{$customer->id}}" title="View" class="btn btn-sm btn-warning pull-right view">
                                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">{{__('View')}}</span>
                                                            </a>
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
            </div>
        </div>
    </div>
</div>
@endsection