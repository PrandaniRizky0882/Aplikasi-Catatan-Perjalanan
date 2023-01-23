@extends('layout.template')
@section('konten')
@auth
<p>Peduli Diri, Hai- <b>{{ Auth::user()->name }}</b></p>
@endauth
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
            <a href="{{ route('travel.create') }}" class="btn btn-success">
                        <i class="fa fa-plus mr-5"></i> Tambah Data</a>
                        <a class="btn btn-primary " href="{{ route('password') }}">Change Password</a>
        </div>
        
        <hr>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-900">
                  @foreach ( $travel_log as $data )
                    <div class="flex justify-between">
                        <div class="flex justify-start">
                            <a href="{{ route('travel.show', $data->id) }}">
                                <p>Tanggal : <?= $data->date ?></p>
                                <p>Waktu : <?= $data->time ?></p>
                            </a>
                        </div> 

                        <div class="flex items-center justify-end mt-4">
                        
                        <form action="/travel/{{$data->id}}" method="post">
                        <center><a href="travel/{{ $data->id }}/edit" class="btn btn-primary" ><i class="fa fa-pencil"></i></a>
                            @method("delete")
                            @csrf
                            <button type="submit"   onclick="alert('Data Telah dihapus! ')"class="btn btn-danger plus mr-auto"><i class="fa fa-trash"></i></button>
                        </form>
                        </div>
                        <hr>
                        <!-- <a href="/travel/{{ $data->id }}" class="btn btn-danger" button type="reset"><i class="fa fa-trash"></i></a> -->
                        </div>
                    </div>
                  @endforeach  
                </div>
            </div>
        </div>
    </div>
<!-- @auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth -->
@endsection
<!-- @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button> -->