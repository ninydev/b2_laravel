<!-- extends('layouts.app') -->
@extends('voyager::master')


@section('page_title')
    @isset($pageTitle) {{  $pageTitle }} | @endisset
@endsection


@section('page_header')
    <h1 class="page-title">
        <i class="voyager-categories"></i>
        @isset($pageTitle) {{  $pageTitle }} @endisset
    </h1>
@endsection

@section('content')
<div class="page-content">
        @include('voyager::alerts')


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-bordered">
                    {{-- <div class="panel"> --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-body">        

    <ul>
        @foreach ($fromDB as $people)
        <li>
            @php 
            var_dump ($people->name );
            echo $people["name"] . " ";
            echo $people->name . " ";
            @endphp
            {{ $people->name }}
        </li>    
        @endforeach
        </hr>
    </ul>


                        </div>
                    </div>
                </div>  
                
            </div>  <!-- row -->

</div>
@endsection
