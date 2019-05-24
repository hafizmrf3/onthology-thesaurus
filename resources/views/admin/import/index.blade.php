@extends('layouts.backend.app')
@section('title','Import')

@push('css')
     <!-- Bootstrap Select Css -->
     <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
        <div class="container-fluid">
                <!-- Vertical Layout | With Floating Label -->
            <form action="{{ route('admin.import.store') }}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    IMPORT FILES
                                </h2>
                            </div>
                            <input type="file" name="image">
                            <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.post.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

                        </div>
                    </div>
                </div>   

            </form>
        </div>



@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

@endpush