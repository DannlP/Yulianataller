<!-- resources/views/crear_servicio.blade.php -->

<h1>Crear Servicio</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('servicio.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"><br><br>

    <button type="submit">Crear Servicio</button>
</form>
