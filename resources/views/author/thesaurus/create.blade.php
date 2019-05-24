@extends('layouts.backend.app')

@section('title','Thesaurus')

@push('css')

@endpush

@section('content')
        <div class="container-fluid">
            
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="color:red;">Complete All the Word Category !!</h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('author.thesaurus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group form-float">
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="id" class="form-control" name="id">
                                        <label class="form-label">ID :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="mt" class="form-control" name="mt">
                                        <label class="form-label">Main Term</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="sn" class="form-control" name="sn">
                                        <label class="form-label">Scope Note :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="uf" class="form-control" name="uf">
                                        <label class="form-label">Use For :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="use" class="form-control" name="use">
                                        <label class="form-label">Use :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="bt" class="form-control" name="bt">
                                        <label class="form-label">Broader Term :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="nt" class="form-control" name="nt">
                                        <label class="form-label">Narrow Term :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="it" class="form-control" name="it">
                                        <label class="form-label">Indonesian Term :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="so" class="form-control" name="so">
                                        <label class="form-label">Source :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="de" class="form-control" name="de">
                                        <label class="form-label">De :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="ko" class="form-control" name="ko">
                                        <label class="form-label">Ko :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="ana" class="form-control" name="ana">
                                        <label class="form-label">Ana :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="tgl" class="form-control" name="tgl">
                                        <label class="form-label">Date :</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="author" class="form-control" name="author" disabled value="{{ Auth::user()->name }}">
                                        <label class="form-label">Author :</label>
                                    </div>
                                    <br>
                                    
                                </div> 
                                <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('author.thesaurus.index') }}">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->





        </div>
@endsection

@push('script')

        
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('assets/backend/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/node-waves/waves.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/backend/js/admin.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/forms/form-wizard.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('assets/backend/js/demo.js') }}"></script>
@endpush