@extends('layout.master')
@section('title')
Dokter
@endsection
@section('content')
    <div class="container">
      <h2>Data Dokter</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('add')}}">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nama Dokter">Nama Dokter</label>
            <input type="text" class="form-control" name="nama">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Spesialis">Spesialis</label>
            <input type="text" class="form-control" name="spesialis">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nomor Handphone">Nomor Handphone</label>
            <input type="text" class="form-control" name="no_hp">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nomor Induk">Nomor Induk</label>
            <input type="text" class="form-control" name="no_induk">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
@endsection
