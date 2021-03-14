@extends('layout')
@section('content')

Selamat Datang Di Web <br>
            <x-alert theme="danger" closeable="true">
                ini adalah alert
            </x-alert>

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Selamat Datang
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Selamat Datang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Mau berkunjung ke About/Contact?
      </div>
      <div class="modal-footer">
      <a class="nav-link" href="{{ URL::to('about') }}">about <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="{{ URL::to('contact') }}">contact <span class="sr-only">(current)</span></a>
        
      </div>
    </div>
  </div>
</div>


@stop