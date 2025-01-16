<?php

class Racional
{
    // Atributos del objeto.
    private int $numerador;
    private int $denominador;
    // private float $resultado;

    // Constructor del objeto.
    public function __construct(int|string $numerador = 1, int $denominador = 1)
    {
        if(is_string($numerador)) {
            $datos = explode("/", $numerador);
            $numerador = $datos[0];
            $denominador = $datos[1];
        }
        $this->numerador = $numerador;
        $this->denominador = $denominador;
    }

    // Metodos de la clase.
    public function setNumerador($Pnumerador): void
    {
        $this->$Pnumerador;
    }

    public function setDenominador($Pdenominador): void
    {
        $this->$Pdenominador;
    }

    public function getNumerador(): int
    {
        return $this->numerador;
    }

    public function getDenominador(): int
    {
        return $this->denominador;
    }

    public function __toString()
    {
        return "$this->numerador/$this->denominador";
    }

    public function sumarRacionales(Racional $Pracional2) {
        $calcNumerador = ($this->denominador * $Pracional2->denominador);
        $caclDenominador = ($this->numerador * $Pracional2->denominador) + ($this->denominador*$Pracional2->numerador);
        $resultado = new Racional($calcNumerador, $caclDenominador);
        return $resultado;
    }

    public function restarRacionales(Racional $Pracional2) {
        $calcNumerador = ($this->numerador * $Pracional2->denominador) - ($this->denominador*$Pracional2->numerador);
        $calcDenominador = ($this->denominador * $Pracional2->denominador);
        $resultado = new Racional($calcNumerador, $calcDenominador);
        return $resultado;
    }
}