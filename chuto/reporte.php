<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    date_default_timezone_set('America/Caracas');
    
    // get the HTML
    ob_start();
    include('formato.php');
    $content = ob_get_clean();

    // convert in PDF
    require_once('../html2pdf/vendor/autoload.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('ficha_tecnica.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
