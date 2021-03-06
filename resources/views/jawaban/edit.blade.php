@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="/jawabans/{{$jawaban->jawaban_id}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="isi">Isi Jawaban</label>
                  <input type="text" class="form-control" id="isi" name="isi" value="{{ $jawaban->isi }}" placeholder="Masukkan Isi">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
    </div>

@endsection
