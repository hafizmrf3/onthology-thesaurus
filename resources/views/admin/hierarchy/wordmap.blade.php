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
                    <h4>
                        Word Mapping for "{{ $thesaurus->mt }}" 
                    </h4>   
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
                                                  
                        </div>   
                    </div>  
                </div>   
            </div>






    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="card">
                <div class="header">
                    <h3> Description for "{{ $thesaurus->mt }}" Search in {{ $thesaurus->so }}</h3> 
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{ route('admin.thesaurus.edit', $thesaurus->id) }}"><i class="material-icons">edit</i>Fill the empty fields</a></li>
                            </ul>
                        </li>
                    </ul>        
                </div>
                <div class="body">
                   
                    <div class="body">
                          <table class="table table-bordered">
                                          
                    <tbody>
                        <tr>
                            <td><span class="badge bg-green">Narrow Term</span></td>
                            <td colspan="12">{{ $thesaurus->nt }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-blue-grey">Broader Term</span></td>
                            <td colspan="12">{{ $thesaurus->bt }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-teal">Indonesian Term</span></td>
                            <td colspan="12">{{ $thesaurus->it }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-brown">Scope Note</span></td>
                            <td colspan="12">{{ $thesaurus->sn }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-blue">Use</span></td>
                            <td colspan="12">{{ $thesaurus->use }}</td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-indigo">Use For</span></td>
                            <td colspan="12">{{ $thesaurus->use }}</td>
                        </tr>
                    </tbody>
                </table>                


                    </div>                                    
                </div>   
                <a class="btn bg-orange m-t-15 waves-effect" href="{{ url()->previous() }}"><i class="material-icons">keyboard_backspace</i>BACK</a> 
                <!--   Route('admin.hierarchy.index')  -->
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