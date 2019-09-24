<?
class Alumno
{
    public $nombre;
    public $apellido;
    public $email;
    public $foto;

    function __constru($nom,$apell,$mail,$foto){
        $this->nombre=$nom;
        $this->apellido=$apell;
        $this->email=$email;
        $this->foto=$foto;

    }
}