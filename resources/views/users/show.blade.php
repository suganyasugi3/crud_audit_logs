
@extends('users.layout')
  
  @section('content')
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2> Show user</h2>
              </div>
              <div class="pull-right">
                  <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
              </div>
          </div>
      </div>
     
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>name:</strong>
                  {{ $user->name }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>email:</strong>
                  {{ $user->email}}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>mobile:</strong>
                  {{ $user->mobile }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Dob:</strong>
                  {{ $user->dob }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Country:</strong>
                  {{ $user->country }}
              </div>
          </div>
      </div>
  @endsection