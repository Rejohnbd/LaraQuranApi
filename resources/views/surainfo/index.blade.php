@extends('layouts.app')

@section('title', 'Sura Info Add Edit')

@section('content')

@component('components.breadcrumb', [
'title' => 'Sura Info Add Edit',
'dashboard_url' => 'home',
'activePage' => 'Sura Info Add Edit'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sura Info</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Please Select Sura</label>
                                <select id="selectSura" class="form-control select2" style="width: 100%;">
                                    <option value="0" selected="selected">Please Select Sura</option>
                                    @foreach($suraList as $sura)
                                    <option value="{{ $sura->id }}" data-id="{{ $sura->total_ayahs }}">{{ $sura->id }} :: {{ $sura->english_name }} :: {{ $sura->bangla_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Please Select Ayah No</label>
                                <select id="selectAhayNo" class="form-control select2" disabled="disabled" style="width: 100%;">
                                    <option value="0" selected="selected">Please Select Ayah No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="suraWrapper">

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('document').ready(function() {
        $('.select2').select2();
        let selectedSura = 0;
        let totalAyah = 0;
        $('#selectSura').on('change', function(e) {
            selectedSura = this.value;
            $('#selectAhayNo').empty().append('<option value="0" selected="selected">Please Select Ayah No</option>');
            totalAyah = $(this).find(':selected').attr('data-id');
            if (selectedSura == 0) {
                $('#selectAhayNo').prop('disabled', true);
                $('#selectAhayNo').empty().append('<option value="0" selected="selected">Please Select Ayah No</option>');
                selectedSura = 0;
                totalAyah = 0;
            } else {
                for (let i = 1; i <= totalAyah; i++) {
                    $('<option/>').val(i).text('Ayah No ' + i).appendTo('#selectAhayNo')
                }
                $('#selectAhayNo').prop('disabled', false);
            }
        });

        $('#selectAhayNo').on('change', function(e) {
            let selectedAyah = this.value;

            $.ajax({
                url: "{{ route('check-sura-info') }}",
                method: 'POST',
                data: {
                    suraId: selectedSura,
                    ayahId: selectedAyah,
                    _token: '{{csrf_token()}}',
                },
                success: function(response) {
                    console.log(response);
                    if (response.status) {
                        $('#suraWrapper').html(response.data);
                    } else {
                        $('#suraWrapper').html(response.data);
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    });
</script>
@endsection