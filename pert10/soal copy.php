<?php
Class Soal {
    private int $id;
    private string $soal;
    private array $pilihan = [];
    private int $indexJawaban;

    public function __construct(int $id, string $soal, array $pilihan, int $indexJawaban){
        $this->id = $id;
        $this->soal = $soal;
        $this->pilihan = $pilihan;
        $this->indexJawaban = $indexJawaban;
    }

    public function getSoal() {
        return $this->soal;
    }
    public function getPilihan() {
        return $this->pilihan;
    }
    public function cekJawaban($jawaban) {
        if ($jawaban == $this->indexJawaban) {
            return true;
        } else {
            return false;
        }
    }
}