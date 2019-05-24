@extends('layouts.backend.app')

@section('title', 'Hierarchy')

@push('css')

    <!-- JQuery DataTable Css -->
     <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet" />
     
     <!-- JQuery Bootstrap-Select Css -->
       <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
     <!-- Treeview 
     <link href="{{ asset('assets/backend/css/jquery.treetable.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/backend/css/jquery.treetable.theme.default.css') }}" rel="stylesheet"> 
     -->
    <!-- Nestable Css -->
        <!-- JQuery Nestable Css -->
        <link href="{{ asset('assets/backend/plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="container-fluid">
        
    <!-- Tabs With Icon Title -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                </div>
                <div class="body">
                    <h2>
                        ALL THESAURUSES
                        <span class="badge bg-blue">{{ $thesauruses->count() }}</span>
                    </h2>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home_with_icon_title" data-toggle="tab">
                                <i class="material-icons">import_contacts</i> Vocabulary
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#description_with_icon_title" data-toggle="tab">
                                <i class="material-icons">description</i> Description
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#nonactivewords_with_icon_title" data-toggle="tab">
                                <i class="material-icons">cancel</i> Non Active Words
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                            <!-- Exportable Table  -->
                            <h2>Thesaurus Table</h2>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                        <thead>
                                                            <tr>
                                                                <th>SELECT</th>
                                                                <th>ID</th>
                                                                <th>MT</th>
                                                                <th>SN</th>
                                                                <th>UF</th>
                                                                <th>USE</th>                      
                                                                <th>BT</th>
                                                                <th>NT</th>
                                                                <th>IT</th>
                                                                <th>SO</th>         
                                                
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>SELECT</th>
                                                                <th>ID</th>
                                                                <th>MT</th>
                                                                <th>SN</th>
                                                                <th>UF</th>
                                                                <th>USE</th>
                                                                <th>BT</th>
                                                                <th>NT</th>
                                                                <th>IT</th>
                                                                <th>SO</th> 
                                                
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            @foreach($thesauruses as $key=>$thesaurus)
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <a href="{{ route('author.hierarchy.wordmap', $thesaurus->id) }}" class="btn btn-info waves-effect">
                                                                            <i class="material-icons">device_hub</i>
                                                                        </a>
                                                                    </td>
                                                                    <td>{{ $thesaurus->id  }}</td>
                                                                    <td>{{ $thesaurus->mt }}</td>
                                                                    <td>{{ $thesaurus->sn }}</td>
                                                                    <td>{{ $thesaurus->uf  }}</td>
                                                                    <td>{{ $thesaurus->use  }}</td>
                                                                    <td>{{ $thesaurus->bt }}</td>
                                                                    <td>{{ $thesaurus->nt  }}</td>
                                                                    <td>{{ $thesaurus->it  }}</td>
                                                                    <td>{{ $thesaurus->so  }}</td> 
                                                                                                      
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END# Exportable Table -->
                        </div>
                        <!--END Tab Thesaurus Table -->
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

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="nonactivewords_with_icon_title">
                             <!-- Nonactive words Table  -->
                             <h2>Nonactive Words</h2>                           
                            <!-- Advanced Select -->
                            <div class="body">        
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="body">
                                                <div class="row clearfix">
                                                    <div class="col-md-4">
                                                        <form action="{{ route('admin.hierarchy.index') }}" method="get">
                                                            {{ csrf_field() }}
                                                            <div class="form-group form-float">
                                                                <div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
                                                                    <label for="category">Select Category :</label>
                                                                    <select name="categories" id="category" class="form-control show-tick" data-live-search="true" multiple>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                        @endforeach
                                                                    </select>                                                                                                                             
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <input type="text" name="search" id="search" class="form-control" placeholder="Search Thesaurus Data" />
                                                                <br>
                                                                <br>
                                                     
                                                           
                                                     
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <label id="second" style="color:yellow;"></label>      
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row clearfix">
                                                    <!-- With Material Design Colors -->
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2> Word Mapping</h2>
                                                            </div>
                                                            <div class="body">
                                                                <ol class="breadcrumb breadcrumb-col-pink">
                                                                    <li><a href="javascript:void(0);">Academic ability</a></li>
                                                                    <li class="active">Academic failure</li>
                                                                </ol>
                                                                <ol class="breadcrumb breadcrumb-col-red">
                                                                    <li><a href="javascript:void(0);">Ability</a></li>
                                                                    <li><a href="javascript:void(0);">Conceptually broad array term</a></li>
                                                                    <li class="active">Stability of electric power systems ---- LCSH</li>
                                                                </ol>
                                                                <ol class="breadcrumb breadcrumb-col-teal">
                                                                    <li><a href="javascript:void(0);">Home</a></li>
                                                                    <li><a href="javascript:void(0);">Library</a></li>
                                                                    <li><a href="javascript:void(0);">Data</a></li>
                                                                    <li class="active">File</li>
                                                                </ol>
                                                                <ol class="breadcrumb breadcrumb-col-orange">
                                                                    <li><a href="javascript:void(0);">Home</a></li>
                                                                    <li><a href="javascript:void(0);">Library</a></li>
                                                                    <li><a href="javascript:void(0);">Data</a></li>
                                                                    <li><a href="javascript:void(0);">File</a></li>
                                                                    <li class="active">Extensions</li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- #END# With Material Design Colors -->
                                                </div>
                                            <!-- live search    
                                                <div class="row clearfix">  
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header">
                                                                <h2> Live search in Laravel using AJAX</h2>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">Search Thesaurus Data</div>
                                                                    <div class="panel-body">
                                                                        <div class="form-group">
                                                                            <input type="text" name="search" id="search" class="form-control" placeholder="Search Thesaurus Data" />
                                                                        </div>
                                                                        <div class="table-responsive">
                                                                            <h3 align="center">Total Data : <span id="total_records"></span></h3>
                                                                            <table class="table table-striped table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>ID</th>
                                                                                        <th>MT</th>
                                                                                        <th>NT</th>
                                                                                        <th>UF</th>
                                                                                        <th>USE</th>
                                                                                        <th>IT</th>
                                                                                        <th>Created At</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                    
                                                                                </tbody>
                                                                            </table>
                                                                        </div>    
                                                                    </div>    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            -->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!--#END# Advanced Select -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Tabs With Icon Title -->    

      
</div>
@endsection


@push('js')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                url:'{!!URL::to('findCategoryDescription')!!}',
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
  <script>
    $(document).ready(function(){
    
     fetch_thesaurus_data();
    
     function fetch_thesaurus_data(query = '')
     {
      $.ajax({
       url:"{   route('admin.hierarchy.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
        {
            $('tbody').html(data.table_data);
            $('#total_records').text(data.total_data);
        // $('label').html(data.label_data);   
            $('#first').on('click', function() {
                $('#second').html(data.label_data);
              //  $('#second').text(data.total_data);
            });      
        
        }
      })
     }
    
   /*  $(document).ready(function() {

        $('#first').on('click', function() {   
            $('#second').html('Dita Huwaida');
        });

        $('#second').on('click', function() {
            
        });

    });
    */


     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_thesaurus_data(query);
     });
    });
    </script>


-->

  
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


        <!-- Jquery Nestable Js -->
            <!-- Jquery Nestable -->
            <script src="{{ asset('assets/backend/plugins/nestable/jquery.nestable.js') }}"></script>
            <!-- Custom Js -->
            <script src="{{ asset('assets/backend/js/admin.js') }}"></script>
            <script src="{{ asset('assets/backend/js/pages/ui/sortable-nestable.js') }}"></script>


         <!-- COBA JS --> 
        <script src="{{ asset('assets/backend/js/thesaurus/coba.js') }}"></script>
         
        <!-- TREEVIEW 
        <script src="{{ asset('assets/backend/js/jquery.treetable.js') }}"></script>
        <script>
            $('table').treetable({ expandable: true });
        </script>        
        -->

@endpush

