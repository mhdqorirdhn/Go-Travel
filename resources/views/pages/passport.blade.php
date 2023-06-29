@extends('layouts.app')
@section('title', 'passport')

@section('content')
                   <div class="card shadow"style="margin: 50px 250px" >
            <div class="card-body">
                <form action="{{ route('home') }}"  >
                    @csrf
                    <div class="form-group">
                        <label for="image">Scan KTP</label>
                        <br>
                        <input type="file" class="from-control" name="image" placeholder="Image" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="image">Scan Kartu Keluarga</label>
                        <br>
                        <input type="file" class="from-control" name="image" placeholder="Image" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="image">Scan Akte Lahir</label>
                        <br>
                        <input type="file" class="from-control" name="image" placeholder="Image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Buat Visa
                    </button>
                </form>
            </div>
        </div>
@endsection