@extends('layouts.admin')
@section('content')         
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des médecins</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                  <table class="table align-items-center table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Spécialité</th>
                        <th>Téléphone</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>Khadim</td>
                        <td>Bâ</td>
                        <td>Dentiste</td>
                        <td>771234567</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                               <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>Khadim</td>
                        <td>Bâ</td>
                        <td>Dentiste</td>
                        <td>771234567</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                               <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>Khadim</td>
                        <td>Bâ</td>
                        <td>Dentiste</td>
                        <td>771234567</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                               <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>Khadim</td>
                        <td>Bâ</td>
                        <td>Dentiste</td>
                        <td>771234567</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                               <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>Khadim</td>
                        <td>Bâ</td>
                        <td>Dentiste</td>
                        <td>771234567</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                               <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>Khadim</td>
                        <td>Bâ</td>
                        <td>Dentiste</td>
                        <td>771234567</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                               <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter un medecin</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control" placeholder="Prénom du médecin">
                  </div>
                  <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" placeholder="Prénom du médecin">
                  </div>
                  <div class="form-group">
                    <label for="">Spécialité</label>
                    <input type="text" class="form-control" placeholder="Prénom du médecin">
                  </div>
                  <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" class="form-control" placeholder="Prénom du médecin">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-success">Ajouter</button>
                    <button class="btn btn-danger">Annuler</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection