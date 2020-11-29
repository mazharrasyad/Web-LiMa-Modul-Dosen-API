<?php

namespace App\Http\Controllers;
use App\Sprint;

class SprintController extends Controller
{
    public function index()
    {
        $sprints = Sprint::all();

        foreach ($sprints as $sprint) {
            $sprint['project_id'] = $sprint->project->nama;
        }

        return array('results' => $sprints);
    }

    public function create(Request $request)
    {
        $sprint = Sprint::create($request->all());

        return response()->json($sprint, 201);
    }

    public function update(Request $request, $id)
    {
        $sprint = Sprint::findOrFail($id);
        $sprint->update($request0>all());

        return response()->json($sprint, 200);
    }

    public function delete($id)
    {
        Sprint::findOrFail($id)->delete();

        return response('Berhasil Delete', 200);
    }
}
