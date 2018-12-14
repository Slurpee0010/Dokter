@extends('layout.master')
@section('title')
Dokter
@endsection
@section('content')
    <div class="container">
      <h2>Edit A Form</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('DokterController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" name="email" value="{{$dokter->email}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Spesialis">Spesialis:</label>
            <input type="text" class="form-control" name="spesialis" value="{{$dokter->spesialis}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Alamat">Alamat:</label>
            <input type="text" class="form-control" name="alamat" value="{{$dokter->alamat}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nomor Handphone">Nomor Handphone:</label>
            <input type="text" class="form-control" name="no_hp" value="{{$dokter->no_hp}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nomor Induk">Nomor Induk:</label>
            <input type="text" class="form-control" name="no_induk" value="{{$dokter->no_induk}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
   </div>
@endsection
