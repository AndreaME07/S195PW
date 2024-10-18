<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorCalcular extends Controller
{
    public function convertir(Request $request)
    {
        // Datos que se tienen en el form
        $mb = $request->input('txtmb');
        $gb = $request->input('txtgb');
        $tb = $request->input('txttb');
        $conversion = $request->input('conversion'); 
        //sirve para que identifique que es lo que va a hacer

        // Para que la respuesta se inicialice sin nada
        $resultado = '';

        // Hacer la conversión dependiendo si se escoge cierta respuesta
        switch ($conversion) {
            case 'mb_gb':
                if ($mb != null && is_numeric($mb)) {
                    $resultado = $mb . ' MB son ' . ($mb / 1024) . ' GB';
                }
                break;

            case 'gb_mb':
                if ($gb != null && is_numeric($gb)) {
                    $resultado = $gb . ' GB son ' . ($gb * 1024) . ' MB';
                }
                break;

            case 'gb_tb':
                if ($gb != null && is_numeric($gb)) {
                    $resultado = $gb . ' GB son ' . ($gb / 1024) . ' TB';
                }
                break;

            case 'tb_gb':
                if ($tb != null && is_numeric($tb)) {
                    $resultado = $tb . ' TB son ' . ($tb * 1024) . ' GB';
                }
                break;

            default:
                $resultado = 'Porfa, selecciona una opción de conversión';
                break;
        }

        // Es para que se muestre el texto
        return back()->with('resultado', $resultado);
    }
}