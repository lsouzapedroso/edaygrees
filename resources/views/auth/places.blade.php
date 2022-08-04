@extends('layouts.not-logged-layout')

<h3 class="text-center">Cadastro de Propriedade</h3>
<!-- Property name input -->
<label class="col-md-4 control-label" for="textinput">Nome da propriedade</label>
<div class="form-group">
    <div class="col-md-5">
        <input id="textinput" name="propertyName" type="text" placeholder="Digite o nome da propriedade" class="form-control input-md w-25" value="{{ old('propertyName') }}" required>
    </div>
</div>
<!-- Latitude -->
<label class="col-md-4 control-label" for="textinput">Latitude</label>
<div class="form-group">
    <div class="col-md-5">
        <input id="textinput" name="latitude" type="text" placeholder="Digite a latitude da propriedade" class="form-control input-md w-25" required>
    </div>
</div>
<!-- Longitude -->
<label class="col-md-4 control-label" for="textinput">Longitude</label>
<div class="form-group">
    <div class="col-md-5">
        <input id="textinput" name="longitude" type="text" placeholder="Digite a longitude da propriedade" class="form-control input-md w-25" required>
    </div>
</div>
<!-- Select Cultivar input-->
<label class="col-md-4 control-label" for="selectbasic">Videira</label>
<div class="form-group">
    <div class="col-md-4">
        <select id="selectcultivar" name="tipoCultivar" class="form-control">
            <option value="0">Seleciona cultivar</option>
        </select>
    </div>
</div>
<label class="col-md-4 control-label" for="selectbasic">Estado</label>
<div class="form-group">
    <div class="col-md-4">
        <select id="selectestado" name="selectestado" class="form-control">
            <option value="0">Seleciona Estado</option>
        </select>
    </div>
</div>
<!-- Select Cidade Basic -->
<label class="col-md-4 control-label" for="selectbasic">Cidade</label>
<div class="form-group">
    <div class="col-md-4">
        <select id="selectcidade" name="city" class="form-control">
            <option value="0">Seleciona Cidade</option>
        </select>
    </div>
</div>


@endsection
