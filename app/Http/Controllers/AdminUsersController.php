<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//clase User
use App\Models\User;

//clase Foto
use App\Models\Foto;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //buscamos info en db.
        $users=User::all();
        return view('admin.users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        User::create($request->all());

        return redirect('admin/users');
        */

        //guardamos todo el post en una variable
        $entrada=$request->all();

        // si subieron foto:
        if($archivo=$request->file('ruta_foto')){

            //buscamos nombre original de la foto
            $nombre=$archivo->getClientOriginalName();

            //guardamos la foto en la carpeta images
            $archivo->move('images',$nombre);

            //guardamos la ruta en la tabla fotos
            $foto=Foto::create(['ruta_foto'=>$nombre]);

            //guardamos el id de la tabla foto en el array entrada para ingresarlo a users
            $entrada['foto_id']=$foto->id;
        }
       

        //encriptar pw
       $entrada['password']=bcrypt($request->password);

       //guardamos todo:
        User::create($entrada);

        //redirijimos
        return redirect('admin/users');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findOrFail($id);

        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
