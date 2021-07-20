   $this->solution(5, 2, [2,1,0,2]);
    
    
    function solution ($U, $L, $C){

        $numeroDeColumnas = 0;

        $M = [];

        foreach ($C as $numero){
            $numeroDeColumnas = $numeroDeColumnas + $numero;
        }

        if($numeroDeColumnas < $U || $numeroDeColumnas < $L){

            dd('IMPOSSIBLE');

        }else{

            $fila = $this->compruebaSiLaSumaEsIgualQueElValorDado($U, $numeroDeColumnas);

            array_push( $M, $fila);

            $fila = $this->compruebaSiLaSumaEsIgualQueElValorDado($L, $numeroDeColumnas);

            array_push( $M, $fila);

            $resultado = "";
            for ($i=0; $i < sizeof($M); $i++){

                for($j=0; $j < sizeof($M[$i]); $j++){

                    $resultado = $resultado.$M[$i][$j];

                }


                if ($i < sizeof($M)-1){

                    $resultado = $resultado.",";

                }

            }

            dd($resultado);

        }


    }

    function valoresAlearotios($numeroDeColumnas){
        $fila= [];

        for ($i = 0; $i <= $numeroDeColumnas; $i ++){


            $fila[$i] = rand(0,1);

        }

        return $fila;

    }

    function compruebaSiLaSumaEsIgualQueElValorDado($valorAComprobar, $numeroDeColumnas){

        do{
            $sumatorioDeNumerosDeFila = 0;
            $fila = $this->valoresAlearotios($numeroDeColumnas);

            foreach ($fila as $numeroDeFila){

                $sumatorioDeNumerosDeFila = $sumatorioDeNumerosDeFila + $numeroDeFila;

            }

        }while($sumatorioDeNumerosDeFila != $valorAComprobar);

        return $fila;
    }
