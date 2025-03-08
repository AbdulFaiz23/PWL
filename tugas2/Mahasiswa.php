<?php
class Mahasiswa {
    // Properties
    private $nim;
    private $nama;

    // Method untuk set data
    public function setData($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    // Method untuk menampilkan data
    public function tampilkanData() {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama
        ];
    }
}
?>