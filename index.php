<?php
/* 
Sukurti klasę "FutboloRungtynes".
Klasės parametrai:  $patirtaTrauma, $kuriKomandaLaimejo, $rungtyniuRezultatas
Metodai:
simuliuotiTraumas() - pasitelkiant rand() funkcija ir generuojant skaičius nuo 1 iki 1000, grąžinti tokią informaciją - jei sugeneruotas skaičius dalinasi iš 3,5 ir 10 - $patirtaTrauma = 2, kitais atvejais - $patirtaTrauma = 0.

simuliuotiRungtynes() - pasitelkian rand() funkciją, grąžinti masyvą su dvejais skaičiais pvz.: [0,2], kur pirmas skaičius yra pirmos komandos komandos įvarčių kiekis, o antras - antros komandos įvarčių kiekis.

laimetojai() - priskiria argumentui $kuriKomandaLaimejo reikšmes: jei pirma komanda laimėjo - $kuriKomandaLaimejo = 1, kitu atveju $kuriKomandaLaimejo = 2

Po klasės sukūrimo, sukurti objektą ir paleisti visus metodus.
*/


class FutboloRungtynes {
    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;
    public $randomNumber;
    public $komanda1;
    public $komanda2;

    public function simuliuotiTraumas() {
        $this->randomNumber = rand(1,1000);

        if($this->randomNumber % 3 == 0 && $this->randomNumber % 5 == 0 && $this->randomNumber % 10 == 0) {
            echo $this->patirtaTrauma = 2;
        } else {
            echo $this->patirtaTrauma = 0;
        }
    } 

    public function simuliuotiRungtynes() {
        $this->komanda1 = rand(0,5);
        $this->komanda2 = rand(0,5);

        return $this->rungtyniuRezultatas = [$this->komanda1, $this->komanda2];
    }

    public function laimetojai() {
        if ($this->komanda1 > $this->komanda2) {
            echo $kuriKomandaLaimejo = 1;
        } else {
            echo $kuriKomandaLaimejo = 2;
        }
    }
} 

$rungtynes = new FutboloRungtynes();
echo $rungtynes->simuliuotiTraumas();
echo "<br>";
var_dump($rungtynes->simuliuotiRungtynes());
echo "<br>";
echo $rungtynes->laimetojai();



?>