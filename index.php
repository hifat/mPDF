<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $pdf = new \Mpdf\Mpdf([
        'default_font_size' => 16,
        'default_font' => 'sarabun'
    ]);

    $html = '
        <table>
            <thead>
                <tr>
                    <td>ชื่อ</td>
                    <td>สกุล</td>
                    <td>อายุ</td>
                    <td>ที่อยู่</td>
                    <td>เพศ</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ฟกดฟหกดฟหกด</td>
                    <td>ฟกดฟหกดฟหกด</td>
                    <td>ฟกดฟหกดฟหกด</td>
                    <td>ฟกดฟหกดฟหกด</td>
                    <td>ฟกดฟหกดฟหกด</td>
                </tr>
            </tbody>
        </table>
    ';

    $stylesheet = file_get_contents('pdf.css');
    $pdf->WriteHTML($stylesheet, 1);
    $pdf->WriteHTML($html, 2);
    $pdf->Output();
?>     

