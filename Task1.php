$this->solution('azABaabza');
$this->solution('TacoCat');
$this->solution('AcZCbaBz');
$this->solution('abcdefjhijklmnopqrstuvwxyz');


public function solution($S) {

    $letrasBalanceadas = [];
    $stringEnArray = str_split($S);
    $longitudDelArray = sizeof($stringEnArray);


    for ($i=0;$i<$longitudDelArray; $i++){

        $letraAComparar = $stringEnArray[$i];


        if ($letraAComparar == strtoupper($letraAComparar)){

            $letraACompararContraria = strtolower($letraAComparar);

        } else {

            $letraACompararContraria = strtoupper($letraAComparar);

        }

        if(array_search($letraACompararContraria, $stringEnArray) !== false){

                if(array_search($letraAComparar, $letrasBalanceadas) === false){

                    array_push($letrasBalanceadas, $letraAComparar);

                }
        }

    }




    if($letrasBalanceadas !== []) {

        for ($i = 0; $i < $longitudDelArray; $i++) {

            $checkLetras = $letrasBalanceadas;


            $posicionInicial = 0;
            $letrasContiguas = 0;
            for ($j = $i; $j < $longitudDelArray; $j++) {


                if (array_search($stringEnArray[$j], $letrasBalanceadas) !== false) {

                    if ($posicionInicial == 0) {

                        $posicionInicial = $i;

                    }


                    $letrasContiguas++;

                    unset($checkLetras[array_search($stringEnArray[$j], $checkLetras)]);

                } else {

                    $checkLetras = $letrasBalanceadas;
                    $letrasContiguas = 0;

                }

                if ($checkLetras === [] && $letrasContiguas > 1) {

                    dd($checkLetras);
                    break;

                }

            }

            if ($checkLetras === []) {
                break;

            }


        }


        if ($letrasContiguas <= 1){

            dd(-1);

        }else{

        dd('todas check', $posicionInicial, $letrasContiguas, substr($S, $posicionInicial, $letrasContiguas));

        }




    }else{

        dd(-1);

    }




}
