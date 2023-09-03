@extends('layouts.admin')
@section('content')         
<div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <span class="h4">Liste des Rendez-vous</span>
                <span class="float-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="#myBtn">Nouvel rendez-vous</button>
                </span>
            </div>
            <div class="card-body">
                 <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Medecin</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>12-03-2023</td>
                        <td>Visite médical</td>
                        <td>Khadim Bâ</td>
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
                        <td>12-03-2023</td>
                        <td>Visite médical</td>
                        <td>Khadim Bâ</td>
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
                        <td>12-03-2023</td>
                        <td>Visite médical</td>
                        <td>Khadim Bâ</td>
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
                        <td>12-03-2023</td>
                        <td>Visite médical</td>
                        <td>Khadim Bâ</td>
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
                        <td>12-03-2023</td>
                        <td>Visite médical</td>
                        <td>Khadim Bâ</td>
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

                </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ajouter un Rendez-vous</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="">Médecin</label>
                    <select name="" id=""  class="form-control">
                      <option value="">Khadim Bâ</option>
                      <option value="">Khadim Bâ</option>
                      <option value="">Khadim Bâ</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea type="text" class="form-control" placeholder="Prénom du médecin">
                    </textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button"class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success">Save changes</button>
                </div>
              </div>
            </div>
          </div>
@endsection