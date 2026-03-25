<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return response()->json(Students::all(), 200);
    }

    public function store(Request $request)
    {
        $student = Students::create($request->all());

        return response()->json([
            'message' => 'Estudiante creado', 
            'data' => $student
        ], 201);
    }

    public function show($id)
    {
        $student = Students::findOrFail($id);

        return response()->json($student, 200);
    }

    public function update(Request $request, $id)
    {
        $student = Students::findOrFail($id);
        $student->update($request->all());

        return response()->json([
            'message' => 'Estudiante actualizado',
            'data' => $student
        ], 200);
    }

    public function destroy($id)
    {
        $student = Students::findOrFail($id);
        $student->delete();

        return response()->json([
            'message' => 'Estudiante eliminado'
        ], 200);
    }
}
