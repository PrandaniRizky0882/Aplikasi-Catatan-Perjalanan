@extends('layout.template')
@section('konten')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('travel.store') }}">
                    @csrf
                    <div class="form-group" style="padding: 10px 0">
                    <div class="from-material">
                        <label for="date" class="from-label">date</label>
                        <input type="date" id="date" name="date" class="form-control" required>
    </div>
    </div>
    <div class="form-group" style="padding: 10px 0">
                    <div class="from-material">
                    <label for="time" class="from-label">time</label>
                    <input type="time" id="time" name="time" class="form-control" required>
    </div>
    </div>
    <div class="form-group" style="padding: 10px 0">
                    <div class="from-material">
                    <label for="location" class="from-label">Lokasi</label>
                    <input type="text" id="location" name="location" class="form-control" required>
    </div>
    <div class="form-group" style="padding: 10px 0">
                    <div class="from-material">
                    <label for="temperature" class="from-label">suhu</label>
                    <input type="text" id="temperature" name="temperature" class="form-control" required>
    </div>

                    <div class="flex items-center justify-end mt-4">
                        <hr>
                    <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.Srem">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('travel.index') }}">Back</a>
                    </div>
                </form>  
                </div>
            </div>
        </div>
    </div>
@endsection