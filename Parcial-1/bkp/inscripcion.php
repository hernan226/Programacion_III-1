<?php
//
include_once 'manejadorDeArchivos.php';

class inscripcion
{
    public $id;
    public $alumnoNom;
    public $materia;
    public $apellido;
    public $email; 
    public $codigoMat;

    public function  __construct($alu,$mat,$ape,$ema,$codMat,$i){

                        //caso: inscribirAlumno (get): Se recibe nombre, apellido, mail del alumno, materia y código de la materia 
                //y se guarda en el archivo inscripciones.txt restando un cupo a la materia en el archivo materias.txt. Si no hay 
                //cupo o la materia no existe informar cada caso particular.
        $this->id=$i;
        $this->alumnoNom=$alu;
        $this->materiaNom=$mat;
        $this->apellido=$ape;
        $this->email=$ema;
        $this->codigoMat=$codMat;
    }
    public static function inscribirAlumno($inscripcion)
    {
        
        $lista=manejadorDeArchivos::leer("materias.txt");
        $keyId="codigo";
        $valueId=$inscripcion["codigoMateria"];

        if(manejadorDeArchivos::verificarExistenciaDeId($lista,$keyId,$valueId))
        {
            $ins=new inscripcion($inscripcion["nombre"],$inscripcion["nombreMateria"],$inscripcion["apellido"],$inscripcion["email"],$inscripcion["codigoMateria"], 1);
            $rtaMateria=manejadorDeArchivos::buscar("materias.txt", $keyId, $valueId);
            $materiaModificar=((object)($rtaMateria[0]));
            $cupos=(int)($materiaModificar->{'cupo'});
            $aula=$materiaModificar->{'aula'};
            if($cupos>0)
            {
                $cupos=$cupos-1;
            }
            $materiaNueva=new materias($inscripcion["nombreMateria"],$inscripcion["codigoMateria"],$cupos,$aula);
            manejadorDeArchivos::reemplazar("materias.txt",$materiaNueva,$keyId,$valueId);
            manejadorDeArchivos::guardarDato($ins,"","inscripcione","id", 1);
        }
    }
    public static function traerInscriptos()
    {
        $listaInscriptos=manejadorDeArchivos::leer("inscripciones.txt");
        var_dump($listaInscriptos);
    }
    public static function traerInscriptosPorApellidoMateria($value, $key)
    {
        
            $buscados=manejadorDeArchivos::buscar("inscripciones.txt", $value, $key);
            var_dump($buscados);
    }
}
?>