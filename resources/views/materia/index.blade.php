@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif


<a href="{{url('materia/create')}}">Registrar nueva materia</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad 1</th>
            <th>Calificacion Act 1</th>
            <th>Actividad 2</th>
            <th>Calificacion Act 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($materias as $materia)
        <tr>
            <td>{{$materia ->id}}</td>
            <td>{{$materia ->Asignatura}}</td>
            <td>{{$materia ->Actividad1}}</td>
            <td>{{$materia ->CalificacionAct1}}</td>
            <td>{{$materia ->Actividad2}}</td>
            <td>{{$materia ->CalificacionAct2}}</td>
            <td>
                <a href="{{ url('/materia/'.$materia->id.'/edit') }}">
                    Editar
                </a>

                |

                <form action="{{ url('/materia/'.$materia->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Deseas realmente borrar este registro?')" value="Eliminar">


                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>