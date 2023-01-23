
<div>
<h4>Data Absensi Siswa SMPN 1 Baureno</h4>
</div>
menuju <a href="dashboard.absensi.create">ABSENSI</a>
<div>
    <form action="dashboard/absensi" method="post">
        @csrf
        <div class="row g-2 mb-3">
        <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control" id="nis" placeholder="125789">
            <label for="nis">NIS</label>
        </div>
        </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nama" placeholder="Jokowidodo">
                    <label for="nama">Nama</label>
                </div>
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control" id="status" placeholder="name@example.com">
                <label for="status">Kelas</label>
            </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                <input type="text" class="form-control" id="nama" placeholder="Jokowidodo">
                    <label for="floatingSelectGrid">Nama Guru</label>
                </div>
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md">
            <div class="form-floating">
                <input type="date" class="form-control" id="status" placeholder="name@example.com">
                <label for="status">Tanggal</label>
            </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                    <option selected>Status</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Hadir</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alfa">Alfa</option>
                    </select>
                    <label for="floatingSelectGrid">Keterangan</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Send Absen</button>
    </form>
</div>
