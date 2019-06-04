@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Custeomer Edit') }}</div>
                    <div class="card-body">
                        <form action="/customer" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('country') }} :</label>
                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{old('country')}}" required autofocus>
                                    @if ($errors->has('country'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="postcode" class="col-md-4 col-form-label text-md-right">{{ __('postcode') }} :</label>
                                <div class="col-md-6">
                                    <input id="postcode" type="text" class="form-control{{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" value="{{old('postcode')}}" required autofocus>
                                    @if ($errors->has('postcode'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('postcode') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prefecture" class="col-md-4 col-form-label text-md-right">{{ __('prefecture') }} :</label>
                                <div class="col-md-6">
                                    <input id="prefecture" type="text" class="form-control{{ $errors->has('prefecture') ? ' is-invalid' : '' }}" name="prefecture" value="{{old('prefecture')}}" required autofocus>
                                    @if ($errors->has('prefecture'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('prefecture') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('city') }} :</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{old('city')}}" required autofocus>
                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('ward') }} :</label>
                                <div class="col-md-6">
                                    <input id="ward" type="text" class="form-control{{ $errors->has('ward') ? ' is-invalid' : '' }}" name="ward" value="{{old('ward')}}" required autofocus>
                                    @if ($errors->has('ward'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ward') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="streetAddress" class="col-md-4 col-form-label text-md-right">{{ __('streetAddress') }} :</label>
                                <div class="col-md-6">
                                    <input id="streetAddress" type="text" class="form-control{{ $errors->has('streetAddress') ? ' is-invalid' : '' }}" name="streetAddress" value="{{old('streetAddress')}}" required autofocus>
                                    @if ($errors->has('streetAddress'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('streetAddress') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="secondaryAddress" class="col-md-4 col-form-label text-md-right">{{ __('secondaryAddress') }} :</label>
                                <div class="col-md-6">
                                    <input id="secondaryAddress" type="text" class="form-control{{ $errors->has('secondaryAddress') ? ' is-invalid' : '' }}" name="secondaryAddress" value="{{old('secondaryAddress')}}" required autofocus>
                                    @if ($errors->has('secondaryAddress'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('secondaryAddress') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('company') }} :</label>
                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" value="{{old('company')}}" required autofocus>
                                    @if ($errors->has('company'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('company') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="userName" class="col-md-4 col-form-label text-md-right">{{ __('userName') }} :</label>
                                <div class="col-md-6">
                                    <input id="userName" type="text" class="form-control{{ $errors->has('userName') ? ' is-invalid' : '' }}" name="userName" value="{{old('userName')}}" required autofocus>
                                    @if ($errors->has('userName'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('userName') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="domainName" class="col-md-4 col-form-label text-md-right">{{ __('domainName') }} :</label>
                                <div class="col-md-6">
                                    <input id="domainName" type="text" class="form-control{{ $errors->has('domainName') ? ' is-invalid' : '' }}" name="domainName" value="{{old('domainName')}}" required autofocus>
                                    @if ($errors->has('domainName'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('domainName') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }} :</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{old('email')}}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('lastName') }} :</label>
                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{old('lastName')}}" required autofocus>
                                    @if ($errors->has('lastName'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastName') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('firstName') }} :</label>
                                <div class="col-md-6">
                                    <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{old('firstName')}}" required autofocus>
                                    @if ($errors->has('firstName'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastKanaName" class="col-md-4 col-form-label text-md-right">{{ __('lastKanaName') }} :</label>
                                <div class="col-md-6">
                                    <input id="lastKanaName" type="text" class="form-control{{ $errors->has('lastKanaName') ? ' is-invalid' : '' }}" name="lastKanaName" value="{{old('lastKanaName')}}" required autofocus>
                                    @if ($errors->has('lastKanaName'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastKanaName') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstKanaName" class="col-md-4 col-form-label text-md-right">{{ __('firstKanaName') }} :</label>
                                <div class="col-md-6">
                                    <input id="firstKanaName" type="text" class="form-control{{ $errors->has('firstKanaName') ? ' is-invalid' : '' }}" name="firstKanaName" value="{{old('firstKanaName')}}" required autofocus>
                                    @if ($errors->has('firstKanaName'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstKanaName') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('phoneNumber') }} :</label>
                                <div class="col-md-6">
                                    <input id="phoneNumber" type="text" class="form-control{{ $errors->has('phoneNumber') ? ' is-invalid' : '' }}" name="phoneNumber" value="{{old('phoneNumber')}}" required autofocus>
                                    @if ($errors->has('phoneNumber'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phoneNumber') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="realText" class="col-md-4 col-form-label text-md-right">{{ __('realText') }} :</label>
                                <div class="col-md-6">
                                    <textarea id="realText" class="form-control{{ $errors->has('realText') ? ' is-invalid' : '' }}" name="realText"  required autofocus>{{old('realText')}}</textarea>
                                    @if ($errors->has('realText'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('realText') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-0 btn-toolbar">
                                <div class="btn-group offset-md-4">
                                    <button type="button" class="btn btn-default" onclick="location.href='/customer/'">
                                        {{ __('Back') }}
                                    </button>
                                    <button type="submit" class="btn btn-success ml-5">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection