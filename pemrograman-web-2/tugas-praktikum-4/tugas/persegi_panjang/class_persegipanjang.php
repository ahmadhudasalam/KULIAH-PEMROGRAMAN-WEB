<?php
class PersegiPanjang { // buka class
    private $panjang;
    private $lebar;
    function __construct($panjang,$llebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $llebar;
    }
    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }
    function getKeliling()
    {
    return 2 * ($this->panjang + $this->lebar);
    }
} // tutup class
18. ?>