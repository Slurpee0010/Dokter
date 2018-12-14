@extends('layout.master')
@section('title')
Dokter
@endsection
@section('content')
    <div class="row">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="col-lg-12 grid-margin">
       <div class="card">
         <div class="card-body">
           <div class="table-responsive">
             <table class="table table-bordered">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Nama Dokter</th>
                 <th>Email</th>
                 <th>Spesialis</th>
                 <th>Alamat</th>
                 <th>Nomor Handphone</th>
                 <th>Nomor Induk</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach($dokter as $dokter)
               <tr>
                 <td>{{$dokter->id}}</td>
                 <td>{{$dokter->nama}}</td>
                 <td>{{$dokter->email}}</td>
                 <td>{{$dokter->spesialis}}</td>
                 <td>{{$dokter->alamat}}</td>
                 <td>{{$dokter->no_hp}}</td>
                 <td>{{$dokter->no_induk}}</td>
                 <td><a href="{{action('DokterController@edit', $dokter->id)}}" class="btn btn-warning">Edit</a>
                    <a href ="{{action('DokterController@destroy', $dokter['id'])}}" class="btn btn-danger">Delete</a>
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
@endsection
