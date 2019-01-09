<?php

namespace App\Http\Controllers;

use App\Relationship;
use App\Vendor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $graph = 1;
        $allRelationships = Relationship::where('graph_id', $graph)->get();
        $nodes = [];
        $relationships = [];
        foreach ($allRelationships as $relationship){
            $to = Vendor::where('id', $relationship->to)->first();
            $from = Vendor::where('id', $relationship->from)->first();
            array_push($nodes, $to);
            array_push($nodes, $from);

            array_push($relationships, [
               'from' => $relationship->from,
               'to' => $relationship->to
            ]);
        }
        $nodes = array_unique($nodes);

        $nodeList = [];

        foreach ($nodes as $node){
            array_push($nodeList, [
               'id' => $node->id,
               'label' => $node->name
            ]);
        }

        return view('home', [
            "nodeList" => $nodeList,
            "relationships" => $relationships
        ]);
    }
}
