<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Reporte2 extends CI_Controller {
 
    public function index()
    {
        // Se carga el modelo alumno
        $this->load->model('users_modelo');
        // Se carga la libreria fpdf
        $this->load->library('pdf');
 
        // Se obtienen los alumnos de la base de datos
        $usuarios = $this->users_modelo->obtenerListaUsuarios();
 
        // Creacion del PDF
 
        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();
 
        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Lista de usuarios");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);
 
        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $this->pdf->Cell(15,7,'Numero','TB',0,'L','1');
        $this->pdf->Cell(10,7,'ID','TB',0,'L','1');
        $this->pdf->Cell(40,7,'Usuario','TB',0,'L','1');
    
        $this->pdf->Cell(50,7,'Creacion','TB',0,'L','1');
        $this->pdf->Cell(50,7,'Ultimo Acceso','TB',0,'L','1');
        $this->pdf->Ln(7);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($usuarios as $usuario) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
                $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada alumno
                $this->pdf->Cell(10,5,$usuario->id,'BL',0,'L',0);
                $this->pdf->Cell(40,5,$usuario->username,'BL',0,'L',0);
                $this->pdf->Cell(50,5,$usuario->created,'BL',0,'L',0);
                $this->pdf->Cell(50,5,$usuario->last_login,'BL',0,'L',0);
            //Se agrega un salto de linea
            $this->pdf->Ln(6);
        }
        ob_end_clean (); 
        $this->pdf->Output("Lista de Usuarios.pdf", 'I');
    }
}