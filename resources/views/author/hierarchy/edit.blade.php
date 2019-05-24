@extends('layouts.backend.app')

@section('title','hierarchy')

@push('css')
        <!-- Nestable Css -->
        <!-- JQuery Nestable Css -->
        <link href="{{ asset('assets/backend/plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />

@endpush

@section('content')
        <div class="container-fluid">            

                <div class="row clearfix">
                
                    <!-- Default Example -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h1>
                                    WORD MAPPING
                                    <small>hierarchical list </small>
                                </h1>
                            </div>
                            <div class="body">
                                    <br>
                                    <br>
                                    <label class="label bg-red">{{ $thesaurus->mt }}</label><label>->>>-</label>
                                    <label class="label bg-brown">{{ $thesaurus->sn }}</label><label>->>>-</label>
                                    <label class="label bg-indigo">{{ $thesaurus->uf }}</label><label>->>>-</label>
                                    <label class="label bg-blue">{{ $thesaurus->use }}</label><label>->>>-</label>
                                    <label class="label bg-grey">{{ $thesaurus->bt }}</label><label>->>>-</label>
                                    <label class="label bg-green">{{ $thesaurus->nt }}</label><label>->>>-</label>
                                    <label class="label bg-teal">{{ $thesaurus->it }}</label><label>->>>-</label>
                                    <label class="label bg-amber">{{ $thesaurus->so }}</label>
                                    <br>
                                    <br>    
                            </div>
                            <a class="btn btn-danger m-t-15 waves-effect" href="{{ Route('admin.hierarchy.wordmap') }}">WORD MAPPING</a>
                        </div>
                    </div>
                
                </div>
                
                


                <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        EDIT THESAURUS
                                    </h2>
                                </div>
                                <div class="body">
                                    <form action="{{ route('admin.hierarchy.update', $thesaurus->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group form-float">
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="id" class="form-control" name="id" value="{{ $thesaurus->id }}">
                                                <label class="form-label">ID</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="mt" class="form-control" name="mt" value="{{ $thesaurus->mt }}">
                                                <label class="form-label">MT</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="sn" class="form-control" name="sn" value="{{ $thesaurus->sn }}">
                                                <label class="form-label">SN</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="uf" class="form-control" name="uf" value="{{ $thesaurus->uf }}">
                                                <label class="form-label">UF</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="use" class="form-control" name="use" value="{{ $thesaurus->use }}">
                                                <label class="form-label">USE</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="bt" class="form-control" name="bt" value="{{ $thesaurus->bt }}">
                                                <label class="form-label">BT</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="nt" class="form-control" name="nt" value="{{ $thesaurus->nt }}">
                                                <label class="form-label">NT</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="it" class="form-control" name="it" value="{{ $thesaurus->it }}">
                                                <label class="form-label">IT</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="so" class="form-control" name="so" value="{{ $thesaurus->so }}">
                                                <label class="form-label">SO</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="de" class="form-control" name="de" value="{{ $thesaurus->de }}">
                                                <label class="form-label">DE</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="ko" class="form-control" name="ko" value="{{ $thesaurus->ko }}">
                                                <label class="form-label">KO</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="ana" class="form-control" name="ana" value="{{ $thesaurus->ana }}">
                                                <label class="form-label">ANA</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="text" id="tgl" class="form-control" name="tgl" value="{{ $thesaurus->tgl }}">
                                                <label class="form-label">TGl</label>
                                            </div>
                                            <br>
                                            <div class="form-line">
                                                <input type="radio" id="status" class="with-gap" name="status" value="1" {{ $thesaurus->status == 1 ? 'checked' : '' }}>
                                                <label for="status">Enabled</label>
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input type="radio" id="status" class="with-gap" name="status" value="0" {{ $thesaurus->status == 0 ? 'checked' : '' }}>
                                                <label for="status">Disabled</label>
                                            </div>
                                            <br>
                                        </div>
                                        <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.hierarchy.index') }}">BACK</a>
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


        </div>
@endsection

@push('script')

            <!-- D3 JS-->
            <script src="{{ asset('http://d3js.org/d3.v3.min.js') }}"></script>
            <script src="http://d3js.org/d3.v3.min.js"></script>
            <script>

                var canvas = d3.select("body").append("svg")
                                .attr("width", 1200)
                                .attr("height", 700)
                                .append("g")
                                    .attr("transform", "translate(50, 50)");
                var tree = d3.layout.tree()
                                .size([400, 400]);

                d3.json("treedata.json", function(data){
                        var nodes = tree.nodes(data);
                        var links = tree.links(nodes);
                        
                        var node = canvas.selectAll(".node")
                            .data(nodes)
                            .enter()
                            .append("g")
                                .attr("class", "node")
                                .attr("transform", function(d) {
                                    return "translate(" + d.y + "," + d.x + ")";
                                })

                    node.append("circle")
                        .attr("r", 5)
                        .attr("fill", "steelblue");

                    node.append("text")
                        .text(function(d) {
                            return d.name;
                        })

                    var diagonal = d3.svg.diagonal()
                                        .projection(function(d) {
                                            return [d.y, d.x];
                                        });

                    canvas.selectAll(".link")
                            .data(links)
                            .enter()
                            .append("path")
                            .attr("class", "link")
                            .attr("fill", "none")
                            .attr("stroke", "#ADADAD")
                            .attr("d", diagonal);
                })

            </script>



            <!-- Jquery Nestable Js -->
            <!-- Jquery Nestable -->
            <script src="{{ asset('assets/backend/plugins/nestable/jquery.nestable.js') }}"></script>
            <!-- Custom Js -->
            <script src="{{ asset('assets/backend/js/admin.js') }}"></script>
            <script src="{{ asset('assets/backend/js/pages/ui/sortable-nestable.js') }}"></script>

@endpush