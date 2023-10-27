    <h1>{{ $modo }} empleado</h1>

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
        </div>
    @endif

    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre"> 
    </div>

    <div class="form-group">
    <label for="ApellidoPaterno" id="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="Nombre">
    </div>

    <div class="form-group">
    <label for="ApellidoMaterno" id="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="Nombre">
    </div>

    <div class="form-group">
    <label for="Correo" id="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
    </div>
    <br>
    <div class="form-group">
    @if(isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="" class="img-thumbnail img-fluid">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    <br>
    </div>

    <input type="submit" class="btn btn-success" value="{{ $modo }} datos">

    <a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>

    <br>