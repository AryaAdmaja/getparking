<?php

declare(strict_types=1);

require_once __DIR__ . "/Config.php";

final class ExitParkir extends Config
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertData($ruang, $plat_nomor, $posisi, $idparkir )
    {
        $this->db->query("UPDATE parkir SET waktu_keluar=NOW(), status='Keluar' WHERE idparkir='$idparkir'");
        return true;
    }
}