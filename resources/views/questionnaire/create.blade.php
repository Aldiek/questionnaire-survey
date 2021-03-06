@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('questionnaire.Create New Questionnaire')</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/questionnaires') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">@lang('questionnaire.title')</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp"
                                    placeholder="Enter Title" value="{{ old('title') }}">
                                <small id="titleHelp" class="form-text text-muted">
                                    @lang('questionnaire.Give your questionnaire a purpose that attracts attention')</small>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>

                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="purpose">@lang('questionnaire.purpose')</label>
                                <input name="purpose" type="text" class="form-control" id="purpose"
                                    aria-describedby="purposeHelp" placeholder="Enter Purpose" value="{{ old('purpose') }}">
                                <small id="purposeHelp" class="form-text text-muted">
                                    @lang('questionnaire.Givin a purpose will increase response')
                                </small>
                                @error('purpose')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                @lang('questionnaire.Create Questionnaire')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
