<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Update Sura Info</h3>
    </div>
    <form action="{{ route('sura-info.update', $suraInfo->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="suraId">Sura Id</label>
                        <input type="number" name="sura_list_id" class="form-control" id="suraId" placeholder="Enter Sura Id" value="{{ $suraInfo->sura_list_id }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ayahNo">Ayah No</label>
                        <input type="number" name="ayah_no" class="form-control" id="ayahNo" placeholder="Enter Ayah No" value="{{ $suraInfo->ayah_no }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pageNo">Page No</label>
                        <input type="number" name="page_no" class="form-control" id="pageNo" placeholder="Enter Page No" value="{{ $suraInfo->page_no }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jazNo">Jaz No</label>
                        <input type="number" name="jaz_no" class="form-control" id="jazNo" placeholder="Enter Jaz No" value="{{ $suraInfo->jaz_no }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="arabicAyah">Arabic Ayah</label>
                <textarea name="arabic" class="form-control" id="arabicAyah" rows="3" placeholder="Enter Arabic Ayahs" required>{{ $suraInfo->arabic }}</textarea>
            </div>
            <div class="form-group">
                <label for="englishAyah">English Ayahs</label>
                <textarea name="english" class="form-control" id="englishAyah" rows="3" placeholder="Enter English Ayahs" required>{{ $suraInfo->english }}</textarea>
            </div>
            <div class="form-group">
                <label for="banglaAyah">Bangla Ayahs</label>
                <textarea name="bangla" class="form-control" id="banglaAyah" rows="3" placeholder="Enter Bangla Ayahs" required>{{ $suraInfo->bangla }}</textarea>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info">Update</button>
            <a href="{{ route('sura-info.index') }}" class="btn btn-default float-right">Cancel</a>
        </div>
    </form>
</div>