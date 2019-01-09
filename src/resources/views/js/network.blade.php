<script type="text/javascript">
    // create an array with nodes

    let nodes = new vis.DataSet(@json($nodeList));

    let edges = new vis.DataSet(@json($relationships));

    // create a network
    let container = document.getElementById('mynetwork');

    // provide the data in the vis format
    let data = {
        nodes: nodes,
        edges: edges
    };

    @include('js.options')

    // initialize your network!
    let network = new vis.Network(container, data, options);
</script>
