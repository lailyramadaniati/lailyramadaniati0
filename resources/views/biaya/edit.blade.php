@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Biaya </div>

                <div class="card-body">
                    <form action="{{ route('update.biaya', $biaya->id_biaya)}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Jenis Kendaraan</label>
                                <input type="text" value={{ is_null($biaya) ? '' : $biaya->jenis }} name="jenis" class="form-control" placeholder="Masukkan Jenis">
                            </div>
                            <div class="col">
                                <label for="">Biaya</label>
                                <input type="number" value={{ is_null($biaya) ? '' : $biaya->biaya }} name="biaya" class="form-control" placeholder="Rp.">
                            </div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="form-row">
                            <div class="row">
                                <div class="col">
                                <button class="btn btn-sm btn-primary" type="submit">SIMPAN</button>
                                <a href="{{route('biaya') }}" class="btn btn-sm btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
