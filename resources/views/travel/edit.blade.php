@extends('layout.template')
@section('konten')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="{{ route('travel.update',$travel_log->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group" style="padding: 10px 0">
                    <div class="from-material">
                        <label for="date" class="from-label">Tanggal</label>
                        <input type="date" id="date" name="date" class="form-control" required value="{{$travel_log->date}}"> <!--{{ old($travel_log->date) }}-->
                        </div>
                        </div>
                        <div class="form-group" style="padding: 10px 0">
                                    <div class="from-material">
                                    <label for="time" class="from-label">Waktu</label>
                                    <input type="time" id="time" name="time" class="form-control" required value="{{$travel_log->time}}">
                        </div>
                        </div>
                        <div class="form-group" style="padding: 10px 0">
                                        <div class="from-material">
                                        <label for="location" class="from-label">Lokasi</label>
                                        <input type="text" id="location" name="location" class="form-control" required value="{{$travel_log->location}}">
                        </div>
                        <div class="form-group" style="padding: 10px 0">
                                        <div class="from-material">
                                        <label for="temperature" class="from-label">Suhu</label>
                                        <input type="text" id="temperature" name="temperature" class="form-control" required value="{{$travel_log->temperature}}">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                        <hr>
                        <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.Srem">Save</button>
                        <a class="btn btn-danger" href="{{ route('travel.index') }}">Back</a>
                    </div>
                </form>  
                </div>
            </div>
        </div>
    </div>
    <div class="border border-gray-400 p-4 "></div>
@endsection