@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kota') }}</div>

                <div class="card-body">
                <form  action="{{route('kota.store')}}" method="post">
                    @csrf
                   <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_kota">

                        @if($errors->has('kode_kota'))
                            <span class="text-danger">{{$errors->first('kode_kota')}}</span>
                        @endif

                    </div>
                     </div>
                     <div class="form-group">
                        <label for="">Asal Kota</label>
                        <select name="id_provinsi" class="form-control" required>
                            @foreach($provinsi as $data)
                                <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputPassword1" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_kota">

                        @if($errors->has('nama_provinsi'))
                            <span class="text-danger">{{$errors->first('nama_provinsi')}}</span>
                        @endif

                    </div>
                     </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
