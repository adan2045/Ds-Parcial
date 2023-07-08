<?php

class Paciente
{
    public $Id;
    public $Nombre;
    public $Apellido;
    public $Documento;
    public $Edad;
    public $Email;
    public $ListaTurnos = array();


    public function MostrarDatos()
    {

        echo 'Paciente: ' . '<Br>';
        echo 'El id : ' . $this->Id . '<Br>';
        echo 'Nombre : ' . $this->Nombre . '<Br>';
        echo 'Apellido: ' . $this->Apellido . '<Br>';
        echo 'Documento: ' . $this->Documento . '<Br>';
        echo 'edad' . $this->Edad;
        echo 'Email: ' . $this->Email . '<Br>';

        if ($this->Edad > 0 && $this->Edad < 17) {
            echo 'paciente menor de edad';
        } else if ($this->Edad >= 18 && $this->Edad < 74) {
            echo 'paciente mayor de edad';
        } else if ($this->Edad >= 75) {
            echo 'paciente tercera edad';
        } else {
            echo 'la edad del paciente fue incorrecta';
        }

        foreach ($this->ListaTurnos as $l) {
            echo '-------------------------------------------------------------';
            echo 'Turnos: ';
            echo '-------------------------------------------------------------<Br>';
            echo 'Id: ' . $l->Id . '<Br>';
            echo 'Fecha: ' . $l->Fecha . '<Br>';
            echo 'Hora: ' . $l->Hora . '<Br>';
            echo 'Medico: ' . $l->Medico . '<Br>';
            echo 'Id: ' . $l->Id . '<Br>';
            echo '-------------------------------------------------------------';
            echo 'Especialidad: ';
            echo '-------------------------------------------------------------<Br>';
            echo 'Id: ' . $l->Especialidad->Id . '<Br>';
            echo 'Descripcion: ' . $l->Especialidad->Descripcion . '<Br>';
        }
    }
}
