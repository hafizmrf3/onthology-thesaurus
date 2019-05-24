@extends('layouts.backend.app')

@section('title', 'Thesaurus')

@push('css')
     <!-- JQuery DataTable Css -->
     <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endpush

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <a class="btn btn-primary waves-effect" href="{{ route('admin.thesaurus.create') }}">
            <i class="material-icons">add</i>
            <span>Add New Thesaurus</span>
        </a>
    </div>
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        ALL THESAURUSES
                    </h2>
                    
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID</th>
                                    <th>MT</th>
                                    <th>SN</th>
                                    <th>UF</th>
                                    <th>USE</th>
                                    <th>BT</th>
                                    <th>NT</th>
                                    <th>IT</th>
                                    <th>SO</th>
                                    <th>Action</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>               
                                    <th>NO</th>
                                    <th>ID</th>                     
                                    <th>MT</th>
                                    <th>SN</th>
                                    <th>UF</th>
                                    <th>USE</th>
                                    <th>BT</th>
                                    <th>NT</th>                      
                                    <th>IT</th>
                                    <th>SO</th>
                                    <th>Action</th> 
                                </tr>
                            </tfoot>
                            
                            <tbody>
    
                                @foreach($thesauruses as $key=>$thesaurus)                                   
                                    <tr>
                                        <td>{{ $key + 1  }}</td>
                                        <td>{{ $thesaurus->id }}</td>
                                        <td>{{ $thesaurus->mt }}</td>
                                        <td>{{ $thesaurus->sn }}</td>
                                        <td>{{ $thesaurus->uf  }}</td>
                                        <td>{{ $thesaurus->use  }}</td>
                                        <td>{{ $thesaurus->bt  }}</td>
                                        <td>{{ $thesaurus->nt  }}</td>
                                        <td>{{ $thesaurus->it  }}</td>
                                        <td>{{ $thesaurus->so  }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.thesaurus.edit', $thesaurus->id) }}" class="btn btn-info waves-effect">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <!-- <button class="btn btn-danger waves-effect" type="button" onclick="deleteThesaurus({{ $thesaurus->id }})">
                                                <i class="material-icons">delete</i>
                                            </button> 
                                                <form id="delete-form-{{ $thesaurus->id }}"action="{{ route('admin.hierarchy.destroy', $thesaurus->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>-->
                                             <a href="{{ route('admin.thesaurus.disableword', $thesaurus->id) }}" class="btn btn-danger waves-effect">
                                                <i class="material-icons">cancel</i>
                                            </a>                          
                                        </td>                                                         
                                    </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
    
    

   



</div>
@endsection

@push('js')


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
        <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
        <script type="text/javascript">
            function deleteThesaurus(id){
                const swalWithBootstrapButtons = swal.mixin({
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    })

                    swalWithBootstrapButtons({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.value) {
                        event.preventDefault();
                        document.getElementById('delete-form-'+id).submit();
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                        )
                    }
                })
            }
        </script>

@endpush

