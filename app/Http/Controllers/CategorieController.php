<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
// use App\Http\Requests\StoreCategorieRequest;
// use App\Http\Requests\UpdateCategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $categories = Categorie::where('status',1)->simplePaginate(5);
        return $categories;
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

            //Crear categoria
            Categorie::create([
                "name" => $request[0]
            ]);
            // respuesta
            return response()->json("Categoria Creada correctamente.", Response::HTTP_OK);

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
    public function show(Categorie $categorie)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
