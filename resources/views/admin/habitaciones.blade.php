<div class="container-agendas">
        <h1 class="title">Lista de Agendas</h1>
        <table class="styled-table" border="1">
            <thead>
                <tr>
                    <th>Numero_habitacion</th>
                    <th>Num_piso</th>
                    <th>tipo_habitacion</th>
                    <th>Capacidad</th>
                    <th>Descripcion</th>
                    <th>Foto</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Descripcion_completa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($habitaciones as $habitacion)
                    <tr>
                        <td>{{ $habitacion->num_habitacion }}</td>
                        <td>{{ $habitacion->num_piso}}</td>
                        <td>{{ $habitacion->tipo_hab}}</td>
                        <td>{{ $habitacion->capacidad}}</td>
                        <td>{{ $habitacion->descripcion }}</td>
                        <td>{{ $habitacion->foto }}</td>
                        <td>{{ $habitacion->precio }}</td>
                        <td>{{ $habitacion->estado}}</td>
                        <td>{{ $habitacion->descripcion_completa}}</td>
        
                        <td class="options">
                            <button onclick="editar({{$habitacion->id}})">Editar</button>
                            <button onclick="eliminar({{$habitacion->id}})">Eliminar</button>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href=" " class="btn create">Crear</a>
</div>