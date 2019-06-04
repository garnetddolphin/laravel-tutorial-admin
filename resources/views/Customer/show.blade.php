@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Custeomer Detail') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('country') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->country}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="postcode" class="col-md-4 col-form-label text-md-right">{{ __('postcode') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->postcode}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="prefecture" class="col-md-4 col-form-label text-md-right">{{ __('prefecture') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->prefecture}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('city') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->city}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('ward') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->ward}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="streetAddress" class="col-md-4 col-form-label text-md-right">{{ __('streetAddress') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->streetAddress}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="secondaryAddress" class="col-md-4 col-form-label text-md-right">{{ __('secondaryAddress') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->secondaryAddress}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('company') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->company}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('userName') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->userName}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="domainName" class="col-md-4 col-form-label text-md-right">{{ __('domainName') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->domainName}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->email}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('lastName') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->lastName}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('firstName') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->firstName}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="lastKanaName" class="col-md-4 col-form-label text-md-right">{{ __('lastKanaName') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->lastKanaName}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="firstKanaName" class="col-md-4 col-form-label text-md-right">{{ __('firstKanaName') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->firstKanaName}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('phoneNumber') }} :</label>
                        <label class="col-md-4 col-form-label text-md-left">{{$customer->phoneNumber}}</label>
                    </div>
                    <div class="form-group row">
                        <label for="realText" class="col-md-4 col-form-label text-md-right">{{ __('realText') }} :</label>
                        <label class="col-md-7 col-form-label text-md-left">{{$customer->realText}}</label>
                    </div>
                    <div class="row mb-0 btn-toolbar">
                        <div class="btn-group offset-md-4">
                            <button type="submit" class="btn btn-default" onclick="location.href='/customer/'">
                                {{ __('List Back') }}
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" onclick="location.href='/customer/{{$customer->id}}/edit'">
                                {{ __('Edit') }}
                            </button>
                            <form action="/customer/{{$customer->id}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-danger ml-5">
                                    {{ __('Delete') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection