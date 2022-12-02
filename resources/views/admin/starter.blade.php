@extends('admin.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Layout Admin </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Layout</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  

  <!-- Main content -->
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userData">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="userData" tabindex="-1" role="dialog" aria-labelledby="userData"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userData">user lastname and user firstname</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row col justify-content-center">
            <span class="h1 text-olive text-center"> Profil <hr class="style"> </span>
          </div>
          <div class="h5 row row-cols-2 justify-content-center">
            <div class="col"> N° Matricule </div> <div class="col"> N° Matricule </div>
            <div class="col"> Adresse mail </div> <div class="col"> Adresse mail </div>
            <div class="col"> Date de validation </div> <div class="col"> {{date('Y-m-d')}} </div>
            </span>
          </div>
          <hr>
          <div class="row col justify-content-center">
            <span class="h1 text-olive text-center"> Statistiques <hr class="style"> </span>
          </div>
          <div class="justify-content-left h4 row row-cols-2">
            <div class="col"> Date du premier ticket </div> <div class="col"> {{date('Y-m-d')}} </div>
            <div class="col"> Total de tickets </div>   <div class="col"> 20 </div>
            <div class="col"> Moyenne de tickets </div>  <div class="col"> 3 tickets par semaine </div>
            </span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- /.content -->
  <!-- /.content-wrapper -->
</div>
@endsection