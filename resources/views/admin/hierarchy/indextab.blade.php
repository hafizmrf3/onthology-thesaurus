@extends('layouts.backend.apph')

@section('title', 'Hierarchy')

@push('css')

    <!-- JQuery DataTable Css -->
     <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet" />
     
     <!-- JQuery Bootstrap-Select Css -->
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
     <!-- Treeview 
     <link href="{{ asset('assets/backend/css/jquery.treetable.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/backend/css/jquery.treetable.theme.default.css') }}" rel="stylesheet"> 
     -->
    <!-- Nestable Css -->
     <!-- JQuery Nestable Css -->
    <link href="{{ asset('assets/backend/plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />

@endpush

@section('content')
    <br><br><br><br><br>
    <main role="main">
     
      <!-- Tabs With Icon Title -->
    <div class="row clearfix">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <div class="card">
                <div class="body">
                    <h2>
                        ALL THESAURUSES
                    </h2>
                    <br>
                    <a class="btn bg-blue-grey m-t-15 waves-effect" href="{{ Route('admin.hierarchy.showall') }}">SHOW ALL DATA</a>           

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <!-- <li role="presentation" class="active">
                            <a href="#home_with_icon_title" data-toggle="tab">
                                <i class="material-icons">import_contacts</i>&nbsp;Vocabularies
                            </a>
                        </li>  -->
                        <li role="presentation">
                            <a href="#description_with_icon_title" data-toggle="tab">
                                <i class="material-icons">description</i>&nbsp;Desc 
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#wordsmapping_with_icon_title" data-toggle="tab">
                                <i class="material-icons">device_hub</i>&nbsp;Hierarchy 
                            </a>
                        </li>
                       
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                       
                        <!--Tab Descriptions -->
                        <div role="tabpanel" class="tab-pane fade" id="description_with_icon_title">
                            <b> Description </b>
                                <div class="body">
                                  


                                    <ul class="list-group">
                                        <li class="list-group-item">Main Term <span class="badge bg-red">MT</span></li>
                                        <li class="list-group-item">Scope Note <span class="badge bg-brown">SN</span></li>
                                        <li class="list-group-item">Use For <span class="badge bg-indigo">UF</span></li>
                                        <li class="list-group-item">Use <span class="badge bg-blue">USE</span></li>
                                        <li class="list-group-item">Broader Term <span class="badge bg-blue-grey">BT</span></li>
                                        <li class="list-group-item">Narrow Term <span class="badge bg-green">NT</span></li>
                                        <li class="list-group-item">Indonesian Term <span class="badge bg-teal">IT</span></li>
                                        <li class="list-group-item">Source <span class="badge bg-amber">SO</span></li>
                                    </ul>        
                        </div>                                    
                        <!--END Tab Decriptions -->             
                        </div>
                        <!-- Tab Hierarchy -->
                        <div role="tabpanel" class="tab-pane fade" id="wordsmapping_with_icon_title">                   
                            <!-- Advanced Select -->
                            <div class="body">        
                            <div class="col-md-12">
                                {!! Form::open(['method'=>'GET', 'url'=>'admin/searchthesaurus', 'role'=>'search']) !!}
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="searchData" class="form-control date" placeholder="Search Thesaurus">
                                        </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">search</i>
                                            </span>        
                                    </div>                
                                    <br><br><br>
                                {!! Form::close() !!}          
                                </div>              
                                              
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="clearfix m-b-20">
                                            <div class="dd">
                                                <!--isi data dari table-->
                                                @forelse($thesauruses as $thesaurus)   

                                                <ol class="dd-list">
                                                    
                                                    <li class="dd-item" data-id="mt" href="{{ route('admin.hierarchy.wordmap', $thesaurus->id) }}">
                                                        <div class="dd-handle">MT: {{ $thesaurus->mt }}</div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="nt">
                                                                <div class="dd-handle">NT: {{ $thesaurus->nt }}</div>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item" data-id="bt">
                                                                        <div class="dd-handle">BT: {{ $thesaurus->bt }}</div>
                                                                    </li>
                                                                    <li class="dd-item" data-id="it">
                                                                        <div class="dd-handle">IT: {{ $thesaurus->it }}</div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li class="dd-item" data-id="sn">
                                                                <div class="dd-handle">SN: {{ $thesaurus->sn }}</div>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item" data-id="use">
                                                                        <div class="dd-handle">Use: {{ $thesaurus->use }}</div>
                                                                    </li>
                                                                    <li class="dd-item" data-id="uf">
                                                                        <div class="dd-handle">UF: {{ $thesaurus->uf }}</div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                                @empty
                                                    <h3>Not Found</h3>
                                                @endforelse
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                

                            </div>                              
                        </div>
                        <!--END Tab Hierarchy -->
                    </div>
                </div>
            </div>
        </div>
        
  
    </div>
              
           
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
            <div class="card">
                <div class="body">
                          

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home_with_icon_title" data-toggle="tab">
                                <i class="material-icons">import_contacts</i>&nbsp;Vocabularies
                            </a>
                        </li>
                        
                       
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!--Tab Vocabularies -->
                        <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                            <div class="row clearfix">

                            <div class="card">
                                <div class="body">
                                    <div class="col-md-12">
                                    {!! Form::open(['method'=>'GET', 'url'=>'admin/searchthesaurus', 'role'=>'search']) !!}
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" name="searchData" class="form-control date" placeholder="Find Thesaurus">
                                            </div>
                                                <span class="input-group-addon">
                                                    <i class="material-icons">search</i>
                                                </span>        
                                        </div>                
                                        <br>
                                    {!! Form::close() !!}          
                                    
                                    </div>              

                                        

                                <!-- hasil pencarian dalam bentuk label GA HARUS DITAMPILIN WOYYY WKWKWK
                                    @forelse($thesauruses as $thesaurus)
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a class="label bg-red" href="{{ route('admin.hierarchy.wordmap', $thesaurus->id) }}"> {{ $thesaurus->mt }} </a> 
                                    </div>

                                    @empty
                                        <h2>Data Not Found</h2>
                                    @endforelse
                                 -->
                                   
                                <br><br><br>
                                                        
                                </div>   
                            </div>  
                                <a class="btn bg-orange m-t-15 waves-effect" href="{{ Route('admin.dashboard') }}"><i class="material-icons">keyboard_backspace</i>DASHBOARD</a>   



                            </div>
                        </div>
                        <!--END Tab Vocabularies -->
                       
                    </div>
                </div>
            </div>
            
            
            
            


            
        
        </div>

            
        
    </div>


@endsection





@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        


        $(document).on('change','.nonamecategory',function () {
            // console.log("hmm its change");

            var desc_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();
            var op=" ";
            $.ajax({
                type:'get',
                url:'{!! URL::to('findCategoryDescription')!!}',
                data:{'id':desc_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>chose product</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].descriptioncategory+'</option>';
                   }
                   div.find('.descriptioncategory').html(" ");
                   div.find('.descriptioncategory').append(op);
                },
                error:function(){
                }
            });
        });



        $(document).on('change','.namecategory',function () {
            var slug_id=$(this).val();
            var a=$(this).parent();
            console.log(slug_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findCategorySlug')!!}',
                data:{'id':slug_id},
                dataType:'json',//return data will be json
                success:function(data){
                    console.log("slug");
                    console.log(data.slug);
                    // here price is coloumn name in products table data.coln name
                    a.find('.slugcategory').val(data.slug);
                },
                error:function(){
                }
            });
        });

    });
</script>

<!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

-->
         <!-- Slimscroll Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
  
        <!-- Jquery DataTable Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
        
        <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
        
        <!-- Jquery Select Plugin Js -->
            <!-- Select Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
        <!-- Bootstrap Tags Input Plugin Js -->
        <script src="{{ asset('assets/backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

        <!-- Jquery Nestable Js -->
            <!-- Jquery Nestable -->
            <script src="{{ asset('assets/backend/plugins/nestable/jquery.nestable.js') }}"></script>
            <!-- Custom Js -->
            <script src="{{ asset('assets/backend/js/admin.js') }}"></script>
            <script src="{{ asset('assets/backend/js/pages/ui/sortable-nestable.js') }}"></script>


         <!-- Typeahead JS autocomplete search --> 
        <script src="{{ asset('assets/backend/js/bootstrap3-typeahead.js') }}"></script>
        <script src="{{ asset('assets/backend/js/bootstrap3-typeahead.min.js') }}"></script>
         
        <script type="text/javascript">
            var path = "{{ route('admin.autocomplete') }}";
            $('input.typeahead').typeahead({
                source: function(query, process) {
                    return $.get(path, { query: query }, function(data) {
                        return process(data);
                    })
                }
            });
        </script>
        <!-- -->
@endpush

