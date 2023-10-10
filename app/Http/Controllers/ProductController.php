<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Helpers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request as RequestFacades;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pathname = RequestFacades::path();
        return view('admin.products.index', compact('pathname'));
    }

    public function getProducts(){
        try {
            $products = Product::where("status", 1)->OrderBy('id', 'desc')->simplePaginate(5);
            $data = json_decode(json_encode($products));
            $data->data = Helpers::setNameElementId($data->data, ['id','name'], ['marks', 'categories']);
        
            
            return response()->json([
                "message" => count($data->data) ? "Consulta Exitosa" : "No hay Datos",
                "data"=> $data, 
                "estatus" => Response::HTTP_OK
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                "message" => "Error en el consultar productos, " . $th->getMessage(),
                "data"=> [], 
                "estatus" => Response::HTTP_NOT_FOUND
            ], Response::HTTP_NOT_FOUND);
        }
       
    }

    public function getProduct($barcode){
        try {
            $product = Product::where(['barcode'=> $barcode])->get();
            
            if (count($product)) {
                return response()->json([
                    "message" => "Consulta exitosa",
                    "data" => $product[0],
                    "status" => Response::HTTP_OK
                ], Response::HTTP_OK);
            }else{
                return response()->json([
                    "message" => "No hay resultados",
                    "data" => [],
                    "status" => Response::HTTP_NOT_FOUND
                ], Response::HTTP_NOT_FOUND);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "message" => "Error al consultar producto por codigo de barra, " . $th->getMessage(),
                "data" => [],
                "status" => 500
            ], 500);
        }
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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Validar que el codigo del producto no exista
            $productoExiste = Product::where("barcode", $request->barcode)->get();
       
            // Si no existe procedemos a crear el producto
            if(!count($productoExiste)){
                $statusCreate = Product::create($request->all());
                 // respuesta
                if ($statusCreate) {
                    return response()->json([
                        "message" => "El producto se registro correctamente",
                        "data" => $statusCreate,
                        "status" => Response::HTTP_OK
                    ], Response::HTTP_OK);
                }else{
                    return response()->json([
                        "message" => "El Producto NO se registro.",
                        "data" => $statusCreate,
                        "status" => Response::HTTP_NOT_FOUND
                    ], Response::HTTP_NOT_FOUND);
                }
            }else{
                return response()->json([
                    "message" => "El Código de barra del Producto ya esta registrado. ",
                    "data" => $request,
                    "status" => Response::HTTP_NOT_FOUND
                ], Response::HTTP_NOT_FOUND);
            }

           
        } catch (\Throwable $th) {
            return response()->json([
                "message" => "El producto No se pudo registrar, " . $th->getMessage(),
                "data" => [],
                "status" => Response::HTTP_NOT_FOUND
            ], Response::HTTP_NOT_FOUND);
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       
        // Si no existe procedemos a crear el producto
        $result = Helpers::setNameElementId($product, ['id','name'], ['marks', 'categories']);

        // respuesta
        if ($result) {
            return response()->json([
                "data" => $result,
                "status" => Response::HTTP_OK
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                "data" => $result,
                "status" => Response::HTTP_NOT_FOUND
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $estatusUpdate = $product->update($request->all());

        // respuesta
        if ($estatusUpdate) {
            return response()->json([
                "data" => $estatusUpdate,
                "status" => Response::HTTP_OK
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                "data" => $estatusUpdate,
                "status" => Response::HTTP_NOT_FOUND
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $estatusDelete = $product->update(['status' => 0]);
        // respuesta
        if ($estatusDelete) {
            return response()->json([
                "data" => $estatusDelete,
                "status" => Response::HTTP_OK
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                "data" => $estatusDelete,
                "status" => Response::HTTP_NOT_FOUND
            ], Response::HTTP_NOT_FOUND);
        }
    }
}
