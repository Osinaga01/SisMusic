@extends('dasboard.layout.admin')
@section('content')
<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Estado del Rol</h4>
                    
                    <a  href="{{ route('roles.index') }}" class="btn btn-warning card-title mr-1 mb-1 waves-effect waves-light"><i class="feather icon-arrow-left"></i>  Regresar</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <p><span class="text-bold-600">Editar Rol</span> </p>
                        <!-- Table with outer spacing -->     
                        
                        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permisos:</strong>
                                    <br/>
                                    @foreach($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    {{-- <br/> --}}
                                    {{-- <div class="vs-checkbox-con vs-checkbox-primary">
                                        <input type="checkbox" checked="" value="false">
                                        <span class="vs-checkbox vs-checkbox-lg">
                                            <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                            </span>
                                        </span>
                                        <span class="">Large</span>
                                    </div> --}}
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                <button type="submit" class="btn btn-primary"><i class="feather icon-save"></i> Guardar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>


    
@endsection