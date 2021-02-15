<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Aliado;
use App\Models\Servicio;
use App\Models\Producto;
use App\Models\Cliente;

class pagina extends Controller
{
    public function index()
    {
        $aliados = Aliado::get();
        $servicios = Servicio::get();
        $productos = Producto::get();
        $clientes = Cliente::get();
        return view('ux.home.show', compact('aliados', 'servicios', 'productos', 'clientes'));
    }


    public function showpost($id)
    {
        $primer_post = Post::get()->take(1);
        $post = Post::find($id);
        $post_derecha = Post::get()->take(4);
        return view('ux.post.show', compact('post','post_derecha', 'primer_post'));
    }

    public function createpost()
    {
        return view('ux.post.create');
    }


}
