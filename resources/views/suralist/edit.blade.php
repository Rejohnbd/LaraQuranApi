@extends('layouts.app')

@section('title', 'Edit Sura')

@section('content')

@component('components.breadcrumb', [
'title' => 'Edit Sura',
'dashboard_url' => 'home',
'activePage' => 'Edit Sura '
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit Sura Form</h3>
                </div>
                <form action="{{ route('sura-list.update', $suraList->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" name="arabic_name" class="form-control" id="arabicName" placeholder="Enter Arabic Name" value="{{ $suraList->arabic_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="totalAyahs">Total Ayahs</label>
                            <input type="number" name="total_ayahs" class="form-control" id="totalAyahs" placeholder="Enter Total Ayahs" value="{{ $suraList->total_ayahs }}" required>
                        </div>
                        <div class="form-group">
                            <label for="engName">English Name</label>
                            <input type="text" name="english_name" class="form-control" id="engName" placeholder="Enter English Name" value="{{ $suraList->english_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="englishAyahCount">English Ayah Count</label>
                            <input type="text" name="english_ayahs_count" class="form-control" id="englishAyahCount" placeholder="Enter English Ayah Count" value="{{ $suraList->english_ayahs_count }}" required>
                        </div>
                        <div class="form-group">
                            <label for="banglaName">Bangla Name</label>
                            <input type="text" name="bangla_name" class="form-control" id="banglaName" placeholder="Enter Bangla Name" value="{{ $suraList->bangla_name }}">
                        </div>
                        <div class="form-group">
                            <label for="banglaAyahCount">Bangla Ayah Count</label>
                            <input type="text" name="bangla_ayahs_count" class="form-control" id="banglaAyahCount" placeholder="Enter Bangla Ayah Count" value="{{ $suraList->bangla_ayahs_count }}" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <a href="{{ route('sura-list.index') }}" class="btn btn-default float-right">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection