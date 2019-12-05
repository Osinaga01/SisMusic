@extends('dasboard.layout.admin')
@section('content')

<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lista de Roles</h4>
                    
                    <a href="{{ route('roles.create') }}" class="btn btn-primary card-title mr-1 mb-1 waves-effect waves-light"><i class="feather icon-plus-square"></i>  Nuevo</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <p><span class="text-bold-600">Descripcion</span> --</p>
                        <!-- Table with outer spacing -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID #</th>
                                        <th>NOMBRE ROL</th>
                                        <th>ACCION</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @can('role-edit')
                                                <a class="btn btn-icon btn-sm btn-icon rounded-circle btn-flat-success mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="right" data-original-title="Editar Rol" href="{{ route('roles.edit',$role->id) }}"><i class="feather icon-edit"></i></a>
                                            @endcan
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline','data-toggle'=>'tooltip','data-placement'=>'right','data-original-title'=>'Eliminar Rol']) !!}
                                                    {!! Form::button('<i class="feather icon-trash-2"></i>', ['class' => 'btn btn-icon btn-sm btn-icon rounded-circle btn-flat-danger mr-1 mb-1 waves-effect waves-light']) !!}
                                                    
                                                {!! Form::close() !!}
                                                {{-- <a class="btn btn-icon btn-sm btn-icon rounded-circle btn-flat-danger mr-1 mb-1 waves-effect waves-light" href="{{ route('roles.edit',$role->id) }}"></a> --}}
                                               
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>
    
@endsection