<label for="Asignatura">Asignatura</label>
<input id="Asignatura" type="text" name="Asignatura" value="{{  isset($materias->Asignatura)?$materias->Asignatura:''}}">
<br>
<label for="Actividad1">Actividad 1</label>
<input id="Actividad1" type="text" name="Actividad1" value="{{  isset($materias->Actividad1)?$materias->Actividad1:''}}">
<br>
<label for="CalificacionAct1">Calificacion Act1</label>
<input id="CalificacionAct1" type="text" name="CalificacionAct1" value="{{  isset($materias->CalificacionAct1)?$materias->CalificacionAct1:''}}">
<br>
<label for="Actividad2">Actividad 2</label>
<input id="Actividad2" type="text" name="Actividad2" value="{{  isset($materias->Actividad2)?$materias->Actividad2:''}}">
<br>
<label for="CalificacionAct2">Calificacion Act2</label>
<input id="CalificacionAct2" type="text" name="CalificacionAct2" value="{{  isset($materias->CalificacionAct2)?$materias->CalificacionAct2:''}}">
<br>

<input type="submit" value="Guardar Datos">
<a href="{{url('materia/')}}">Regresar</a>