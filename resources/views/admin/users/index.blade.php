<html>
Pagina principal del admin<br>

<table>
    <tr>   
        <th>Id</th>
        <th>Foto</th>
        <th>Role</th>
        <th>Nombre</th>
        <th>email</th>
        <th>Creado</th>
        <th>Actualizado</th>
    </tr>

    @if($users)
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    @if($user->foto)
                        <img src="/images/{{ $user->foto->ruta_foto }}" width='50px;' />
                    @else
                    <img src="/images/generic.jpeg" width='50px;' />
                    @endif

                </td>
                <td>{{ $user->role->nombre_rol }}</td>
                <td><a href="{{ route('users.edit',$user->id) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at}}</td>
                <td>{{ $user->updated_at }}</td>

                
            </tr>
        @endforeach
    @endif

</table>

</html>