<html>


Pagina de Admin para crear Usuario


{!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminUsersController@store',
            'files'=>true]) !!}
    <table>
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
                {!! Form::label('password', 'Password'); !!}
            </td>

            <td>
                {!!Form::text('password'); !!}
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
                {!! Form::label('ruta_foto', 'Subir Foto'); !!}
            </td>

            <td>
                {!!Form::file('ruta_foto'); !!}
            </td>
        </tr>



        <tr>
            <td>
                {!! Form::submit('Enviar'); !!}
            </td>

            <td>
                {!!Form::reset('Limpiar Formulario'); !!}
            </td>
        </tr>

    </table>    
{!! Form::close(); !!}




</html>