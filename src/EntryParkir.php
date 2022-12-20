<?php

declare(strict_types=1);

require_once __DIR__ . "/Config.php";

final class EntryParkir extends Config
{

    public function __construct()
    {
        parent::__construct();

        $this->ensureDataIsLoaded();
    }

    public function ensureDataIsLoaded(): array
    {
        $arr = [];

        $sql = $this->db->query("SELECT * FROM parkir");

        while ($data = $sql->fetch_object()) {
            $arr[] = $data;
        }

        return $arr;
    }

    public function insertData($ruang, $plat_nomor, $posisi, $idparkir )
    {

        if ($this->db->query("UPDATE parkir SET ruang ='$ruang', plat_nomor='$plat_nomor', posisi='$posisi',
         waktu_masuk_parkir='NOW()', status='0' WHERE idparkir='$idparkir'")) {

            return true;
        }
    }
}