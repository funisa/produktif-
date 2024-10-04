<?php
class Motor {
    private $merk;
    private $seri;
    private $warna;
    private $tahun;

    public function __construct($merk, $seri, $warna, $tahun) {
        $this->merk = $merk;
        $this->seri = $seri;
        $this->warna = $warna;
        $this->tahun = $tahun;
    }

    public function aksi($action) {
        echo "Motor " . $action . "<br />";
    }

    public function getInfo() {
        return [
            'Merk' => $this->merk,
            'Seri' => $this->seri,
            'Warna' => $this->warna,
            'Tahun' => $this->tahun
        ];
    }

    public function setMerk($merk) { $this->merk = $merk; }
    public function setSeri($seri) { $this->seri = $seri; }
    public function setWarna($warna) { $this->warna = $warna; }
    public function setTahun($tahun) { $this->tahun = $tahun; }
}

$motorKu = new Motor("Yamaha", "NMAX", "Hitam", "2022");

$motorKu->aksi("bergerak");
$motorKu->aksi("berhenti");
$motorKu->aksi("belok");
$motorKu->aksi("mundur");

echo "<p>";

$info = $motorKu->getInfo();
foreach ($info as $key => $value) {
    echo "$key Motor: " . $value . "<br />";
}

$motorKu->setMerk("Honda");
$motorKu->setSeri("Scoopy");
$motorKu->setWarna("Merah");
$motorKu->setTahun("2024");

echo "<p>Informasi Motor Berubah:<br />";
$infoUpdated = $motorKu->getInfo();
foreach ($infoUpdated as $key => $value) {
    echo "$key Motor Berubah: " . $value . "<br />";
}

echo "<p>";
?>
