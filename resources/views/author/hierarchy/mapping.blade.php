<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D3 Js Tutorial</title>

    

</head>
<body>
    
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


</body>
</html>

@push('scripts')
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

@endpush