<?php

declare(strict_types=1);

require_once __DIR__ . "/Config.php";

final class CreateRuangParkir extends Config
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

    public function insertData($ruang, $posisi)
    {
        if (is_null($ruang)) {
            throw new InvalidArgumentException("Nomor Ruang Parkir tidak boleh kosong");
        }

        if ($this->db->query("SELECT * FROM parkir WHERE ruang = '$ruang' ")->fetch_object()) {
            throw new InvalidArgumentException("Ruang Parkir telah terdaftar");
        }

        if ($this->db->query("INSERT INTO parkir VALUES(NULL,'$ruang','','$posisi','','','1')")); {

            return true;
        }
    }
}