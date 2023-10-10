<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Helpers extends Model
{
    use HasFactory;

    public static function getMensajeError($e, $mensaje)
    {
        $errorInfo = $mensaje . " ("
            . $e->getMessage() . ")."
            . "Código de error: " . $e->getCode()
            . "Linea de error: " . $e->getLine()
            . "El archivo: " . $e->getFile()
            ?? 'No hay mensaje de error';
        return $errorInfo;
    }

    public static function setNameElementId($datos, $campos, $tables){
        foreach ($datos as $key => $dato) {
            foreach ($tables as $table) {
                $camposT = implode(",", $campos);
                $keyDato = substr($table, 0, -1);
                $dato->{$keyDato} = DB::select("SELECT {$camposT} FROM {$table} WHERE id = ?", [$dato->{$keyDato}]);
                if($dato->{$keyDato}) $dato->{$keyDato} = $dato->{$keyDato}[0];
                else $dato->{$keyDato} = "No asignado";
            }
        }
        return $datos;
    }

    public static function datoExiste($data, $array=["tabla"=>["campo","sqlExtra","key"]])
    {
        foreach ($array as $key => $value) {
            return $result = count(DB::select("select * from {$key} where {$value[0]} = :codigo {$value[1]}", [$data[$value[2]]]) )
            ? DB::select("select * from {$key} where {$value[0]} = :codigo {$value[1]}", [$data[$value[2]]])[0]
            : false;
        }
    }

     /**
     * Esta funcion se encarga de guardar la imagen en el store en la direccion public/fotos
     * recibe los siguientes parametros
     * @param request  Estes es el elemento global de las peticiones y se accede a su metodo file y atributo file
     * @return url Retorna la direccion donde se almaceno la imagen
     */
    public static function setFile($request)
    {
        // Movemos la imagen a storage/app/public/fotos
        $imagen = $request->file('file')->store('public/fotos');

        // configuramos la url de /public a /storage
        $url = Storage::url($imagen);

        // Retorna la URL de la imagen
        return $url;
    }

    /**
     * Eliminamos la imagen o archivo anterior
     * @param url se solicita la url del archivo para removerlo de su ubicacion
     */
    public static function removeFile($url)
    {
        $paths = str_replace('storage', 'public', $url);
        if (Storage::delete($paths)) {
            return true;
        } else {
            return false;
        }
    }


}
