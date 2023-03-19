<form action="{{ url('/materia/'.$materia->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('materia.form');

</form>