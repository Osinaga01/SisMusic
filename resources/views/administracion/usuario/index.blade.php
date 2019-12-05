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
                                        <th>NOMBRE USUARIO</th>
                                        <th>CORREO</th>
                                        <th>ROL</th>
                                        <th>ACCION</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                               
                                     
                                @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                    </td>
                                    <td>
                                        @can('role-edit')
                                            <a class="btn btn-icon btn-sm btn-icon rounded-circle btn-flat-success mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="right" data-original-title="Editar Usuario" href="{{ route('users.edit',$user->id) }}"><i class="feather icon-edit"></i></a>
                                        @endcan
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline','data-toggle'=>'tooltip','data-placement'=>'right','data-original-title'=>'Eliminar Usuario']) !!}
                                                {!! Form::button('<i class="feather icon-trash-2"></i>', ['class' => 'btn btn-icon btn-sm btn-icon rounded-circle btn-flat-danger mr-1 mb-1 waves-effect waves-light']) !!}
                                                
                                            {!! Form::close() !!}
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