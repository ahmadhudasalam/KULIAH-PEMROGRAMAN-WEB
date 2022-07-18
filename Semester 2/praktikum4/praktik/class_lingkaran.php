<?php
class Lingkaran {
    private $jari;
    const PHI = 3.14;
    function __construct($r)
    {
        $this->jari = $r;
    }
    function getLuas()
    {
        return self::PHI * pow($this->jari,2);
    }
    function getKeliling()
    {
    return 2 * self::PHI * $this->jari;
    }
}
?>