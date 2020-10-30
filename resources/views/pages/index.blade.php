@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                        <a href="{{route('pages.create')}}" class="btn btn-primary">{{__('Create')}} {{__('Page')}}</a>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <th></th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('Actions')}}</th>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td></td>
                                    <td>{{$page->title}}</td>
                                    <td>{{$page->image}}</td>
                                    <td></td>
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
@endsection
