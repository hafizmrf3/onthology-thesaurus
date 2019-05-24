@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
    
@endpush



@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    @include('layouts.backend.partial.lastsign')
     
    <div class="panel-body">
        <p>Last Sign in at : {{ auth()->user()->last_sign_in_at }}</p>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-grey hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">import_contacts</i>
                </div>
                <div class="content">
                    <div class="text">ALL THESAURUSES <br> ( {{ $thesauruses->count() }} )</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-blue hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">RECENTLY ADDED</div>
                    <div class="number count-to" data-from="0" data-to="5" data-speed="15" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">cached</i>
                </div>
                <div class="content">
                    <div class="text">RECENTLY UPDATES</div>
                    <div class="number count-to" data-from="0" data-to="20" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">assignment_late</i>
                </div>
                <div class="content">
                    <div class="text">PENDING POSTS</div>
                    <div class="number count-to" data-from="0" data-to="5" data-speed="1000" data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a href="{{ route('admin.thesaurus.disablewords') }}"> 

            <div class="info-box bg-red hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">cancel</i>
                </div>
                <div class="content">
                    <div class="text">{{ $thesauruses->where('status', false)->count() }} DISABLED WORDS</div>   
                </div>
            </div>
        
        </a>
        </div>
    </div>
    <!-- #END# Widgets -->
    <!--
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2>KEDEPUTIAN</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kedeputian</th>
                                    <th>Status</th>
                                    <th>Deputi</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Deputi Bidang Ilmu Pengetahuan Kebumian</td>
                                    <td><span class="label bg-green">Doing</span></td>
                                    <td>Dr. Zainal Arifin, M.Sc.</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deputi Bidang Ilmu Pengetahuan Hayati</td>
                                    <td><span class="label bg-blue">To Do</span></td>
                                    <td>Prof. Dr. Enny Sudarmonowati</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Deputi Bidang Ilmu Pengetahuan Teknik</td>
                                    <td><span class="label bg-light-blue">On Hold</span></td>
                                    <td>Dr. Yan Rianto, M.Eng.</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Deputi Bidang Jasa Ilmiah</td>
                                    <td><span class="label bg-orange">Wait Approvel</span></td>
                                    <td>Dr. Mego Pinandito, M.Eng.</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Deputi Bidang Ilmu Pengetahuan Sosial dan Kemanusiaan</td>
                                    <td>
                                        <span class="label bg-red">Suspended</span>
                                    </td>
                                    <td>Dr. Tri Nuke Pudjiastuti, MA</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>

    
    
</div>
@endsection


@push('js')
           
        <!-- Jquery CountTo Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    
        <!-- Morris Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/morrisjs/morris.js') }}"></script>
    
        <!-- ChartJs -->
        <script src="{{ asset('assets/backend/plugins/chartjs/Chart.bundle.js') }}"></script>
    
        <!-- Flot Charts Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.js') }}"></script>            
        <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.resize.js') }}"></script>     
        <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.pie.js') }}"></script>        
        <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.categories.js') }}"></script> 
        <script src="{{ asset('assets/backend/plugins/flot-charts/jquery.flot.time.js') }}"></script>
    
        <!-- Sparkline Chart Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    
        <!-- Custom Js -->
        <script src="{{ asset('assets/backend/js/admin.js') }}"></script>
        <script src="{{ asset('assets/backend/js/pages/index.js') }}"></script> 

        <!-- LastSign -->
        <script src="{{ asset('assets/backend/js/lastsign.js') }}"></script>
        

@endpush