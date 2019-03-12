@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center text-center">
        <div class="alert alert-warning" role="alert">
            <h5>{{ __('Beta version - You can use for free from Dec., 2018 to the end of Feb., 2019 !') }}</h5>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Match Making') }}</div>

                <div class="card-body">
                    <div class="row mt-3 mb-5">
                        <div class="col-md-3 offset-md-1 offset-xl-2"><h5>{{ __('I AM / WE ARE') }}</h5></div>
                        <div class="col-md-8 col-xl-6 text-center">
                            <div class="border-bottom border-dark pr-2">
                                <h5><strong>{{ App\User::TYPES[$type]['display'] }}</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11 offset-md-1 mb-3"><h5>{{ __('LOOKING FOR OPPORTUNITIES FOR') }}</h5></div>
                        <div class="col-md-8 offset-md-4">
                            <ol>
                            @foreach ($purposes as $purpose)
                                <li class="h5 pl-3 border-bottom border-dark mb-4"><strong>{{ App\User::PURPOSES[$purpose->purpose_id] }}</strong></h5>
                            @endforeach
                            </ol>
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <div class="col-md-11 offset-md-1"><h5>{{ __('SO YOU MAY NEED .....') }}</h5></div>
                    </div>
                    <div id="matches">
                        <matched-list-component :ini-params="{{ json_encode($ini_params) }}" :types="{{ json_encode($selectable_types) }}" :type-ths="{{ json_encode($type_theads) }}" :countries="{{ json_encode($countries) }}" :investment-rounds="{{ json_encode(App\User::INVESTMENT_ROUNDS) }}" :professions="{{ json_encode(App\User::PROFESSIONS) }}" :types-purposes="{{ json_encode($types_purposes) }}" :identified="{{ json_encode(App\User::IDENTIFY_IDENTIFIED) }}"></matched-list-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
