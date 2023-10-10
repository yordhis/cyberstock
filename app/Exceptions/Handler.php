<?php

namespace App\Exceptions;

use App\Models\Helpers;
use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
     
        $this->reportable(function (Throwable $e) {
            $this->renderable(function (QueryException $e, $request) {
                // dd($e);
                $errorInfo = Helpers::getMensajeError($e, "No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión,");
                return response()->json([
                    "message" =>   $errorInfo,
                    "data" => $request,
                    "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            });
    
    
            $this->renderable(function (NotFoundHttpException $e, $request) {
                // dd($e);
                $errorInfo = Helpers::getMensajeError($e, "Error de consula,");
                return response()->json([
                    "message" =>   $errorInfo,
                    "data" => $request,
                    "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            });
    
            $this->renderable(function (RouteNotFoundException $e, $request) {
                // dd($e);
                $errorInfo = Helpers::getMensajeError($e, "La ruta solicitada no esta definida,");
                return response()->json([
                    "message" =>   $errorInfo,
                    "data" => $request,
                    "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            });
    
            $this->renderable(function (ViewException $e, $request) {
                // dd($e);
                $errorInfo = Helpers::getMensajeError($e, "Error de datos de la Vista,");
                return response()->json([
                    "message" =>   $errorInfo,
                    "data" => $request,
                    "estatus" => Response::HTTP_INTERNAL_SERVER_ERROR
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            });
    
        });
    }
}
