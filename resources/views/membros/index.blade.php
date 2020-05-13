@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Membros</h1>
@stop

@section('content')



<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Membros</h3>
            </div>

            @if(count($membros) > 0)
            @foreach($membros as $membro)
                <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Nome</th>
                      <th>Contacto</th>
                      <th>email</th>
                      <th>Grupo</th>
                      <th style="width: 40px">Acção</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>{{$membro->id}}</td>
                    <td>{{$membro->name}}</td>
                    <td>{{$membro->mobile}}</td>
                    <td>{{$membro->email}}</td>
                    <td>{{$membro->Group}}</td>
                    <td>

                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                Ver
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Editar
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Apagar
                            </a>
                    </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            @endforeach
            @else
            <div class="card-body">

                <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-info"></i> Atenção!</h5>
                  Nao existem membros Registados.
                </div>

              </div>
            @endif


            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->


        </div>

        <!-- /.col -->
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>




@stop
