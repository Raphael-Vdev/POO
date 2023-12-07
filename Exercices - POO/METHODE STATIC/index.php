<?php 

class Facture {
    const TVA = 20;

    public static function montantTTC($ht){
        return $ht*(1+self::TVA/100);
                
    }
}

// $facture1 = new Facture();
// echo $facture1->montantTTC(1000);

echo Facture::montantTTC(1000);