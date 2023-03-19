<form action="{{ url('/materia') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('materia.form');
</form>