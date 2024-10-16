@extends('layouts.presensi')
@section('content')

    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">ABSENSI GURU</h3>

        <a href="{{ route('peminjaman.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>

        <form action="{{ route('peminjaman.store') }}" method="POST" >
            @csrf


            <div class="form-group mb-2">
                <label for="siswa_id" class="form-label">Siswa</label> 
                <select name="siswa_id" id="siswa_id" class="form-select">
                        <option>Pilih Siswa</option>
                    @foreach ($siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
                @error('siswa_id')
                <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="buku_id" class="form-label">Buku</label> 
                <select name="buku_id" id="buku_id" class="form-select">
                        <option>Pilih Buku</option>
                    @foreach ($buku as $item)
                        <option value="{{ $item->id }}">{{ $item->judul }}</option>
                    @endforeach
                </select>
                @error('buku_id')
                <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" value="{{ old('tanggal_peminjaman') }}" class="form-control @error('tanggal_peminjaman') is-invalid @enderror" /> 
                @error('tanggal_peminjaman')
                <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tanggal_pengembalian" id="denda" value="{{ old('tanggal_pengembalian') }}" class="form-control @error('tanggal_pengembalian') is-invalid @enderror">
                @error('tanggal_pengembalian')
                <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="denda" class="form-label">Denda</label>
                <input type="text" name="denda" id="denda" value="{{ old('denda') }}" class="form-control @error('denda') is-invalid @enderror">
                @error('denda')
                <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" value="{{ old('keterangan') }}" class="form-control @error('keterangan') is-invalid @enderror">
                @error('keterangan')
                <div class="invalid-feedback d-blok">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary mb-3">Batal</a>
        </form>
    </div>
@endsection

@endsection