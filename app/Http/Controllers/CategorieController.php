<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
// use App\Http\Requests\StoreCategorieRequest;
// use App\Http\Requests\UpdateCategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use LDAP\Result;
use Mockery\Undefined;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Categorie::where('status',1)->OrderBy('id', 'desc')->get();
        $categories = Categorie::where('status',1)->OrderBy('id', 'desc')->simplePaginate(10);
        return response()->json([
            "message" => count($categories) ? "Consulta Exitosa" : "No hay Datos",
            "data"=> $categories, 
            "estatus" => Response::HTTP_OK
        ], Response::HTTP_OK);
    }

    /** Api get categories */
    // public function getCategories()
    // {
    //     $categories = Categorie::where('estatus',1)->get();
    //     return response()->json($categories, Response::HTTP_OK);
    // }

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
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Crear Categoria
            $result = 0;
            if($request->name !== null){
                $result = Categorie::create([
                    "name" => $request->name
                ]);
            }
            
            // Respuesta
            return response()->json([
                "message" => $result ? "Categoria creada correctamente" : "No se creo la Categoria, El campo nombre está vacío!",
                "data"=> $result, 
                "estatus" => $result ? Response::HTTP_CREATED : Response::HTTP_NOT_FOUND
            ], $result ? Response::HTTP_CREATED : Response::HTTP_NOT_FOUND);

        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($idCategorie)
    {
        try {
            $result = Categorie::where("id", $idCategorie)->get();
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
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        try {
            // Actualizar Categoria
            $result = 0;
            if($request->name !== null){
                $result = $categorie->update([
                    "name" => $request->name
                ]);
            }
           return $result;
            // Respuesta
            return response()->json([
                "message" => $result ? "Categoria Editada correctamente" : "No se edito la Categoria, El campo nombre es obligatorio!",
                "data"=> $categorie, 
                "estatus" => $result ? Response::HTTP_OK : Response::HTTP_NOT_FOUND
            ], $result ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCategorie)
    {
        try {
            // Eliminar Categoria
            $result  = 0;
            $categorie = Categorie::where("id", $idCategorie)->get();
           if(isset($categorie[0])){
               $result = $categorie[0]->delete();
           }
            // Respuesta
            return response()->json([
                "message" => $result ? "Categoria Eliminada correctamente" : "No se Eliminó la Categoria!",
                "data"=> $categorie, 
                "estatus" => Response::HTTP_OK
            ], Response::HTTP_OK);
    
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json($th->getMessage(), Response::HTTP_NOT_FOUND);
        }
    }
}
