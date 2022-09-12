<html>
<h1>Pagina para editar Usuarios</h1>


{!! Form::model($user,['method'=>'PATCH','action'=>['App\Http\Controllers\AdminUsersController@update',$user->id],
            'files'=>true]) !!}
    <table>


        <tr>
            <td colspan='2'>
                <img src="/images/{{ $user->foto ? $user->foto->ruta_foto : 'generic.jpeg' }}" width='100px;' />
            </td>
        </tr>
        <tr>
            <td colspan='2'>
                {!!Form::file('ruta_foto'); !!}
            </td>
        </tr>


        <tr>
            <td>
                {!! Form::label('name', 'Nombre'); !!}
            </td>

            <td>
                {!!Form::text('name'); !!}
            </td>
        </tr>


        <tr>
            <td>
                {!! Form::label('email', 'E-Mail'); !!}
            </td>

            <td>
                {!!Form::text('email'); !!}
            </td>
        </tr>

        <tr>
            <td>
                {!! Form::label('email', 'Verify email'); !!}
            </td>

            <td>
                {!!Form::text('email_verified_at'); !!}
            </td>
        </tr>

        <tr>
            <td>
                {!! Form::label('role_id', 'Role: '); !!}
            </td>

            <td>
                {!!Form::text('role_id'); !!}
            </td>
        </tr>

        <tr>
            <td>
                {!! Form::submit('Actualizar'); !!}
            </td>

            <td>
                {!!Form::reset('Limpiar Formulario'); !!}
            </td>
        </tr>

    </table>    
{!! Form::close(); !!}




</html>