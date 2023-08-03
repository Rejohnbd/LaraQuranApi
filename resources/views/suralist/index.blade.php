@extends('layouts.app')

@section('title', 'Sura List')

@section('content')

@component('components.breadcrumb', [
'title' => 'Sura List',
'dashboard_url' => 'home',
'activePage' => 'Sura List'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sura List Table</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Arabic Name</th>
                                <th>Total Ayahs</th>
                                <th>English Name</th>
                                <th>English Ayah Text</th>
                                <th>Bangla Name</th>
                                <th>Bangla Ayah Text</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($suraList as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->arabic_name }}</td>
                                <td>{{ $data->total_ayahs }}</td>
                                <td>{{ $data->english_name }}</td>
                                <td>{{ $data->english_ayahs_count }}</td>
                                <td>{{ $data->bangla_name }}</td>
                                <td>{{ $data->bangla_ayahs_count }}</td>
                                <td>
                                    <a href="{{ route('sura-list.edit', $data->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No User Role Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            {{ $suraList->render() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection