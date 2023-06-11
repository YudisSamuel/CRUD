
<div class="home-content">
    <h3>Isi data Lokasi</h3>
    <table class="table-responsive">
     <thead>
        <form id="demo-form2" action="{{ route('instSuhu') }}" data-parsley-validate class="form-horizontal form-label-left" method="POST">
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text" class="form-control" name = "id" id="id">
            </div><br>
            <!-- Example split danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-danger">Lokasi</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">⬇</span>
                </button>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Kecamatan">Kecamatan</a></li>
                <li><a class="dropdown-item" href="Kota">Kota</a></li>
                <li><a class="dropdown-item" href="Provinsi">Provinsi</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="Provinsi">Separated link</a></li>
                </ul>
            </div><br><br>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>