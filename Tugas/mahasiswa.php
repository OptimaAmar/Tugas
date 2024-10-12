<?php
class Mahasiswa {
    // Properties
    public $nama;
    public $nim;
    public $jurusan;
    public $ipk;

    // Constructor
    public function __construct($nama, $nim, $jurusan, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->ipk = $ipk;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function infoMahasiswa() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan, IPK: $this->ipk";
    }

    // Method untuk mengecek kelulusan
    public function cekKelulusan() {
        if ($this->ipk >= 2.75) {
            return "$this->nama telah lulus.";
        } else {
            return "$this->nama belum lulus.";
        }
    }
}

// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Optima Amar", "23.240.0069", "Teknik Informatika", 4);
$mahasiswa2 = new Mahasiswa("Marco Polo", "23.560.0001", "Teknik Informatika", 2);


echo $mahasiswa1->infoMahasiswa();// Menampilkan informasi mahasiswa
echo "\n";
echo $mahasiswa1->cekKelulusan();// Mengecek kelulusan mahasiswa
echo "\n";
echo $mahasiswa2->infoMahasiswa();// Menampilkan informasi mahasiswa
echo "\n";
echo $mahasiswa2->cekKelulusan();// Mengecek kelulusan mahasiswa
?>
