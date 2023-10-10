<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Http\Requests\StoreMarkRequest;
use App\Http\Requests\UpdateMarkRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($quantityElements = 10)
    {
        $marks = Mark::where('status',1)->OrderBy('id', 'desc')->simplePaginate($quantityElements);
        return response()->json([
            "message" => count($marks) ? "Consulta Exitosa" : "No hay Datos",
            "data"=> $marks, 
            "estatus" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Crear categoria
            $marks = Mark::create([
                "name" => $request->name
            ]);
            // Respuesta
            return response()->json([
                "message" => $marks ? "Marca creada correctamente" : "No se creo la marca!",
                "data"=> $marks, 
                "estatus" => Response::HTTP_CREATED
            ], Response::HTTP_CREATED);
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show($idMark)
    {
        try {
            $result = Mark::where("id", $idMark)->get();
            // Respuesta
            return response()->json([
                "message" => count($result) ? "Consulta Exitosa" : "No Hay resultados",
                "data"=> $result, 
                "estatus" => Response::HTTP_OK
            ], Response::HTTP_OK);
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarkRequest  $request
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        try {
            // Actualizar marca
            $result = $mark->update([
                "name" => $request->name
            ]);
            // Respuesta
            return response()->json([
                "message" => $result ? "Marca Editada correctamente" : "No se edito la marca!",
                "data"=> $result, 
                "estatus" => Response::HTTP_OK
            ], Response::HTTP_OK);
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        try {
            // Eliminar marca
            $result = $mark->delete();
            // Respuesta
            return response()->json([
                "message" => $result ? "Marca Eliminada correctamente" : "No se Eliminó la marca!",
                "data"=> $result, 
                "estatus" => Response::HTTP_OK
            ], Response::HTTP_OK);
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }
}
