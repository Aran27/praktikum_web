<!DOCTYPE html>
<html>
<style>
     h1 {
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
        font-size: 75px;
        background-color: cyan;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        width: 1000px;
        border-collapse: collapse;
        margin-left: 260px;
        background: cornsilk;
        margin-top: 100px;
    }

    th {
        background: darksalmon;
    }

    td {
        background: wheat;
        text-align: center;
    }

    .ex{
        text-align: left;
    }

    td, th {
        border: 2px solid;
        font-size: 20px;
        padding: 5px;
    }
</style>

<?php
abstract class Karyawan{
    public $no;
    public $nama;
    public $ttl;
    public $gender;
    public $level;
    public $status;
    public $gaji;

    function getNo(){
        return $this->no;
    }

    function getName(){
        return $this->nama;
    }

    function getTtl(){
        return $this->ttl;
    }

    function getGender(){
        return $this->gender;
    }

    function getLevel(){
        return $this->level;
    }

    function getStatus(){
        return $this->status;
    }

    function getGaji(){
        return $this->gaji;
    }

    abstract function setGaji();
}

class fulltime extends Karyawan{
    function __construct($no,$nama,$ttl,$gender,$level)
    {
        $this->no       = $no;
        $this->nama     = $nama;
        $this->ttl      = $ttl;
        $this->gender   = $gender;
        $this->level    = $level;
        $this->status   = "Full-Time";
    }

    function setGaji(){
        if ($this->level == "Junior"){
            $this->gaji = 2000000;
        }
        else if ($this->level == "Amateur"){
            $this->gaji = 3500000;
        }
        else {
            $this->gaji = 5000000;
        }
    }
}

class parttime extends Karyawan{
    function __construct($no,$nama,$ttl,$gender,$level)
    {
        $this->no       = $no;
        $this->nama     = $nama;
        $this->ttl      = $ttl;
        $this->gender   = $gender;
        $this->level    = $level;
        $this->status   = "Part-Time";
    }

    function setGaji(){
        if ($this->level == "Junior"){
            $this->gaji = 2000000/2;
        }
        else if ($this->level == "Amateur"){
            $this->gaji = 3500000/2;
        }
        else {
            $this->gaji = 5000000/2;
        }
    }
}

$karyawan1 = new parttime("1","Budi","Bandung, 15-08-1999","L","Junior");
$karyawan2 = new fulltime("2","Aran","Padang, 27-06-1989","L","Amateur");
$karyawan3 = new parttime("3","Sayu","Bekasi, 07-07-2000","P","Amateur");
$karyawan4 = new fulltime("4","Amanda","Jakarta, 19-03-1999","P","Junior");
$karyawan5 = new fulltime("5","Nana","Jakarta, 11-01-1997","P","Master");

$karyawan = array($karyawan1, $karyawan2, $karyawan3, $karyawan4, $karyawan5);

foreach ($karyawan as $kw){
    $kw->setGaji();
}
?>

<body style="background-color:deepskyblue;">

<h1>List Karyawan</h1>

<table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Kelamin</th>
                <th>Level</th>
                <th>Status</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($karyawan as $ky) {?>   
                <tr>
                    <td><?php echo $ky->getNo(); ?></td>
                    <td class="ex"><?php echo $ky->getName() ?></td>
                    <td class="ex"><?php echo $ky->getTtl() ?></td>
                    <td><?php echo $ky->getGender() ?></td>
                    <td><?php echo $ky->getLevel() ?></td>
                    <td><?php echo $ky->getStatus() ?></td>
                    <td><?php echo $ky->getGaji() ?></td>
                </tr>                
            <?php } ?>     
        </tbody>
    </table>

</body>
</html>