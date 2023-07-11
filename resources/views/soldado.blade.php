<h1>Crear Soldado</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('soldado.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"><br><br>

    <label for="edad">edad:</label>
    <input type="number" name="edad" id="edad" value="{{ old('edad') }}"><br><br>

    <button type="submit">Crear Soldado</button>
</form>