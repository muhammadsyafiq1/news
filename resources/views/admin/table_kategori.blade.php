@extends('layouts.dashboard')

@section('title')
    Tabel kategori
@endsection

@section('content')
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form tambah kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Tambah Kategori
                </button>
                </h5>
                <p>Anda dapat mengatur kategori berita disini.</p>
                <div class="table-container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$category->name}}</td>
                                </tr>
                            @php    
                                $no++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>   
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection