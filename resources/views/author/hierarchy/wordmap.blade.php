@extends('layouts.backend.app')

@section('title','hierarchy')

@push('css')
        <!-- Nestable Css -->
        <!-- JQuery Nestable Css -->
        <link href="{{ asset('assets/backend/plugins/nestable/jquery-nestable.css') }}" rel="stylesheet" />

@endpush

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        WORD MAPPING
                        
                    </h1>
                </div>
                
                <div class="body">
                            
                            <div class="body">
        <figure class="highlight"><pre><code class="language-plaintext" data-lang="plaintext">
<label class="label bg-red">{{ $thesaurus->mt }}</label>───────────────────────────────────────────────────>>><label class="label bg-yellow">{{ $thesaurus->so }}</label> 
    │
    ├─────>>><label class="label bg-green">{{ $thesaurus->nt }}                 </label>
    │         |
    │         ├────>>><label class="label bg-grey">{{ $thesaurus->bt }}                   </label>
    │         |
    │         └────>>><label class="label bg-teal">{{ $thesaurus->it }}                   </label>
    │   
    └─────>>><label class="label bg-brown">{{ $thesaurus->sn }}                 </label>
              |
              ├────>>><label class="label bg-blue">{{ $thesaurus->use }}                  </label>
              │   
              └────>>><label class="label bg-indigo">{{ $thesaurus->uf }}                 </label>
                
        </code></pre></figure>
                                                                                                                        
                </div>
                <a class="btn btn-danger m-t-15 waves-effect" href="{{ Route('admin.hierarchy.index') }}">BACK</a>                                    
                        </div>   
                    </div>  
                </div>   
            </div>






    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
           <div class="card">
                <div class="body">
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
            </div>  
        </div>
    </div>   
    
@endsection

@push('script')
            <script src="{{ asset('http://d3js.org/d3.v3.min.js') }}"></script>
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
@endpush