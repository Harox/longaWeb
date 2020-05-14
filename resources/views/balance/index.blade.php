@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Saldo</h3>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                <a href="{{route('balances.create')}}" class="btn btn-block btn-success btn-lg">Depositar</a>
                </div>

                <div class="col-sm-6">
                    <a href="#" class="btn btn-block btn-primary btn-lg">Levantar</a>
                </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>


    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ number_format($amount, 2, '.','') }} MZN</h3>

              <p>Saldo Contabilistico</p>
            </div>
            <div class="icon">
              <i class="fas fa-money-bill-alt"></i>
            </div>
            <a href="#" class="small-box-footer">
                Ver Mais <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
            <h3>{{ number_format($amount, 2, '.','') }} MZN</h3>

              <p>Saldo Disponivel</p>
            </div>
            <div class="icon">
              <i class="fas fa-funnel-dollar"></i>
            </div>
            <a href="#" class="small-box-footer">
                Ver Mais <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Ultimo deposito</p>
            </div>
            <div class="icon">
              <i class="fas fa-hand-holding-usd"></i>
            </div>
            <a href="#" class="small-box-footer">
                Ver Mais <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>último levantamento</p>
            </div>
            <div class="icon">
              <i class="fas fa-credit-card"></i>
            </div>
            <a href="#" class="small-box-footer">
              Ver Mais <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>

@stop


