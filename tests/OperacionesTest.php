<?php
    //Es para llamar a la libreria de PHPUnit
    use PHPUnit\Framework\TestCase;

    class OperacionesTest extends TestCase{

        private $op;

        public function setUp():void{
            $this->op = new Operaciones(); //aqui estams cargando la funcion Oeopraciones del archivo oepraciones.php
        
            
        }

        public function testSumaDeDosValores(){
                $this->assertEquals(201,$this->op->sumar(100,101));
        }

        public function testSumaNulos(){
            $this->expectException(InvalidArgumentException::class);
            $this->op->sumar(null,null);
        }
    }


