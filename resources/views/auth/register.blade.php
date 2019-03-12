@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center text-center">
        <div class="alert alert-warning" role="alert">
            <h4>{{ __('Beta version - You can use for free from Dec., 2018 to the end of Feb., 2019 !') }}</h4>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sign Up') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="form-register">
                        @csrf
                        @php
                            $type_id = !is_null(old('type'))? old('type'): 1;
                            $user_purposes = !is_null(old('purposes'))? old('purposes'): [];
                        @endphp
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('SO I AM / WE ARE .....') }}</label>
                            <div class="col-md-8">
                                <register-type-component :types="{{ json_encode(App\User::TYPES) }}" :selected="{{ $type_id }}" class="{{ $errors->has('type') ? ' is-invalid' : '' }}"></register-type-component>
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="purposes" class="col-md-10 offset-md-1 col-form-label text-md-left">{{ __('I AM / WE ARE LOOKING FOR OPPORTUNITIES FOR .....') }}</label>
                            <div class="col-md-10 offset-md-1">
                                @php
                                    $show_flags = [];
                                    foreach (App\User::TYPES as $key_type => $type) {
                                        $show_purpose = [];
                                        foreach (App\User::PURPOSES as $key_purpose => $purpose) {
                                            $show_purpose[$key_purpose] = in_array($key_purpose, App\User::TYPES_PURPOSES[$key_type])? true: false;
                                        }
                                        $show_flags[$key_type] = $show_purpose;
                                    }
                                @endphp
                                <register-purpose-component :show-flags="{{ json_encode($show_flags) }}" :purposes="{{ json_encode(App\User::PURPOSES) }}" :selected="selectedType" :checked="checkedPurposes" :ini-checked="{{ json_encode($user_purposes) }}"></register-purpose-component>
                                <input class="form-control{{ $errors->has('purposes') ? ' is-invalid' : '' }}" type="hidden">
                                @if ($errors->has('purposes'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('purposes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="terms_conditions" class="col-md-10 offset-md-1 col-form-label text-md-left">{{ __('Terms and Conditions / Disclaimer / Privacy Policy') }}</label>
                          <div id="terms_conditions" class="col-md-10 offset-md-1">
                              <div class="card">
                                  <div class="card-body px-3 py-2">
                                      @component('components.terms_conditions')
                                      @endcomponent
                                      <hr>
                                      @component('components.disclaimer')
                                      @endcomponent
                                      <hr>
                                      @component('components.privacy_policy')
                                      @endcomponent
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <div class="form-check form-check-inline">
                                    <input id="acceptance" type="checkbox" class="form-check-input {{ $errors->has('acceptance') ? ' is-invalid' : '' }}" name="acceptance" required>
                                    <label for="acceptance" class="form-check-label">&nbsp;{{ __('I agree with the Terms and Conditions / Disclaimer / Privacy Policy above.') }}</label>
                                </div>
                                @if ($errors->has('acceptance'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('acceptance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign Up') }}
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
