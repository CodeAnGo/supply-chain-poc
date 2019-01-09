let layoutOptions = {
    randomSeed: undefined,
    improvedLayout:true,
    hierarchical: {
    enabled:true,
    levelSeparation: 150,
    nodeSpacing: 100,
    treeSpacing: 200,
    blockShifting: true,
    edgeMinimization: true,
    parentCentralization: true,
    direction: 'UD',        // UD, DU, LR, RL
    sortMethod: 'directed'   // hubsize, directed
    }
};

let interactionOptions = {
    dragNodes:true,
    dragView: true,
    hideEdgesOnDrag: false,
    hideNodesOnDrag: false,
    hover: false,
    hoverConnectedEdges: true,
    keyboard: {
        enabled: false,
        speed: {x: 10, y: 10, zoom: 0.02},
        bindToWindow: true
    },
    multiselect: false,
    navigationButtons: false,
    selectable: true,
    selectConnectedEdges: true,
    tooltipDelay: 300,
    zoomView: true
};

let manipulationOptions = {
    enabled: false,
    initiallyActive: false,
    addNode: true,
    addEdge: true,
    editNode: undefined,
    editEdge: true,
    deleteNode: true,
    deleteEdge: true,
    controlNodeStyle:{
        // all node options are valid.
    }
};

let options = {
    autoResize: true,
    height: '100%',
    width: '100%',
    locale: 'en',
    clickToUse: false,
    interaction: interactionOptions,
    layout: layoutOptions,
    manipulation: manipulationOptions
};
