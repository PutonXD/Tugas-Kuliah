class Pegawai {
    public $nama;
    public $jenis_kelamin;
    public $jabatan;
    public $status;
    public $gaji;

    public function __construct($nama, $jenis_kelamin, $jabatan, $status, $gaji) {
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->jabatan = $jabatan;
        $this->status = $status;
        $this->gaji = $gaji;
    }

    public function getLabel() {
        return "$this->nama, $this->jenis_kelamin, $this->jabatan, $this->status, $this->gaji";
    }
}

$pegawai1 = new Pegawai("Adam", "laki-laki", "kasir", "menikah", "1.500.000");
$pegawai2 = new Pegawai("Wahyu", "laki-laki", "manager", "menikah", "4.500.000");

echo "Pegawai 1: $pegawai1->nama, $pegawai1->jabatan, $pegawai1->status";
echo "<br>";
echo "Pegawai 1: " . $pegawai1->getLabel();
echo "<br>";
echo "Pegawai 2: " . $pegawai2->getLabel();
