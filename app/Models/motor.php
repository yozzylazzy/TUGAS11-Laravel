<?php

 namespace App\Models;
trait Eksterior
{
    public function setLampudepan($lampudepan)
    {
        $this->lampudepan = $lampudepan;
    }
    public function setLampubelakang($lampubelakang)
    {
        $this->lampubelakang = $lampubelakang;
    }
    public function setLampukabut($lampukabut)
    {
        $this->lampukabut = $lampukabut;
    }
    public function setKacaspion($kacaspion)
    {
        $this->kacaspion = $kacaspion;
    }
    public function setSpoiler($spoiler)
    {
        $this->spoiler = $spoiler;
    }
    public function getLampudepan()
    {
        return $this->lampudepan;
    }
    public function getLampubelakang()
    {
        return $this->lampubelakang;
    }
    public function getLampukabut()
    {
        return $this->lampukabut;
    }
    public function getKacaspion()
    {
        return $this->kacaspion;
    }
    public function getSpoiler()
    {
        return $this->spoiler;
    }
}
trait Spesifikasi
{
    public function setDimensi($dimensi)
    {
        $this->dimensi = $dimensi;
    }
    public function setIsisilinder($isisilinder)
    {
        $this->isisilinder = $isisilinder;
    }
    public function setTipedrive($tipedrive)
    {
        $this->tipedrive = $tipedrive;
    }
    public function setKonfigurasimesin($konfigurasimesin)
    {
        $this->konfigurasimesin = $konfigurasimesin;
    }
    public function setTransmisi($transmisi)
    {
        $this->transmisi = $transmisi;
    }
    public function setPerforma($performa)
    {
        $this->performa = $performa;
    }
    public function setSuspensidepan($suspensidepan)
    {
        $this->suspensidepan = $suspensidepan;
    }
    public function setSuspensibelakang($suspensibelakang)
    {
        $this->suspensibelakang = $suspensibelakang;
    }
    public function getDimensi()
    {
        return $this->dimensi;
    }
    public function getIsisilinder()
    {
        return $this->isisilinder;
    }
    public function getTipedrive()
    {
        return $this->tipedrive;
    }
    public function getKonfigurasimesin()
    {
        return $this->konfigurasimesin;
    }
    public function getTransmisi()
    {
        return $this->transmisi;
    }
    public function getPerforma()
    {
        return $this->performa;
    }
    public function getSuspensidepan()
    {
        return $this->suspensidepan;
    }
    public function getSuspensibelakang()
    {
        return $this->suspensibelakang;
    }
}
trait Safety
{
    public function setAirbagsystem($airbagsystem)
    {
        $this->airbagsystem = $airbagsystem;
    }
    public function setAntitheft($antitheft)
    {
        $this->antitheft = $antitheft;
    }
    public function setEngineimmobilizer($engineimmobilizer)
    {
        $this->engineimmobilizer = $engineimmobilizer;
    }
    public function setChildlock($childlock)
    {
        $this->childlock = $childlock;
    }
    public function setSensorparkir($sensorparkir)
    {
        $this->sensorparkir = $sensorparkir;
    }
    public function getAirbagsystem()
    {
        return $this->airbagsystem;
    }
    public function getAntitheft()
    {
        return $this->antitheft;
    }
    public function getEngineimmobilizer()
    {
        return $this->engineimmobilizer;
    }
    public function getChildlock()
    {
        return $this->childlock;
    }
    public function getSensorparkir()
    {
        return $this->sensorparkir;
    }
}

class Motor
{
    use Eksterior, Spesifikasi, Safety;
    protected $merk = '';
    protected $lampudepan = '';
    protected $lampubelakang = '';
    protected $lampukabut = '';
    protected $kacaspion = '';
    protected $spoiler = '';
    protected $airbagsystem;
    protected $antitheft;
    protected $engineimmobilizer;
    protected $childlock;
    protected $sensorparkir;
    protected $dimensi;
    protected $isisilinder;
    protected $tipedrive;
    protected $konfigurasimesin;
    protected $transmisi;
    protected $performa;
    protected $suspensidepan;
    protected $suspensibelakang;
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function getMerk()
    {
        return $this->merk;
    }
}

$Suzuki = new Motor();
$Suzuki->setMerk('Suzuki S-Presso MT');
$Suzuki->setLampudepan('Halogen');
$Suzuki->setLampubelakang('Halogen');
$Suzuki->setLampukabut('No');
$Suzuki->setKacaspion('Manual');
$Suzuki->setSpoiler('No');
$Suzuki->setDimensi('3.565 x 1.520 x 1.565');
$Suzuki->setIsisilinder('998 cc');
$Suzuki->setTipedrive('Front Wheel Drive');
$Suzuki->setKonfigurasimesin('K10B engine with DOHC');
$Suzuki->setTransmisi('Manual 5 speed');
$Suzuki->setPerforma('67.0PS/5.500rpm');
$Suzuki->setSuspensidepan('MacPherson Strut');
$Suzuki->setSuspensibelakang('Torsion Beam');
$Suzuki->setAirbagsystem('2 airbags');
$Suzuki->setAntitheft('Alarm');
$Suzuki->setEngineimmobilizer('Yes');
$Suzuki->setChildlock('Yes');
$Suzuki->setSensorparkir('Rear Sensor');
echo 'Merk Motor : ' . $Suzuki->getMerk();
?>