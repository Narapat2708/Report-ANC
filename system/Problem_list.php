<?php
require_once __DIR__ . '/../plugins/mpdf/mpdf.php';
$mpdf = new mPDF('utf-8', 'A4-L', 0, '', 10, 10, 10, 10); // เพิ่ม margin-top เป็น 30

ob_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<style>
body {
    font-family: 'THSarabun', 'Garuda', Arial, sans-serif;
    font-size: 11px;
    margin: 0;
    padding: 0;
}
.container {
    margin-top: 20px; /* เพิ่ม margin-top สำหรับ container */
}
table {
    width: 100%;
    border-collapse: collapse;
}
td, th {
    border: 0.1px solid #000;
    padding: 3px;
    vertical-align: top;
}
.noborder td {
    border: 0.1px solid #000;
    font-size: 11px;
}
.header td, .header th {
    text-align: center;
    font-size: 13px;
}
.checkbox {
    font-size: 14px;
    font-family: 'DejaVu Sans', 'thsarabun', 'Garuda', Arial, sans-serif;
}
.dots {
    font-family: 'DejaVu Sans Mono', 'Courier New', monospace;
    letter-spacing: 1.5px;
}
.center {
    text-align: center;
}

</style>
</head>
<body>

<br><br> <!-- เพิ่มบรรทัดว่าง 3 บรรทัด -->

<div class="container">
    <table class="noborder">
        <tr>
              <td colspan="9" rowspan="3" style="padding:0;">
            <table style="width:100%; border:none; border-collapse:collapse;">  
                <tr>
                    <td style="border:none; width:30%; vertical-align:top;" rowspan="3">&nbsp;<b>Problem list</b></td>
                    <td style="border:none; width:70%;">1. .............................................................................................</td>
                </tr>
                <tr>
                    <td style="border:none;">2. .............................................................................................</td>
                </tr>
                <tr>
                    <td style="border:none;">3. .............................................................................................</td>
                </tr>
            </table>
        </td>
            <td colspan="4" style="0.1px solid #000; width:1%;">
                &nbsp;EDC ....................................</span>
                By <span class="checkbox">&#x2610;</span>date <span class="checkbox">&#x2610;</span> us at GA................</span> weeks
            </td>
        </tr>
        <tr>
            <td colspan="4">
                &nbsp;Vaccine 
                <span class="checkbox">&#x2610;</span> dT 
                <span class="checkbox">&#x2610;</span> Influenza vaccine 
                <span class="checkbox">&#x2610;</span> Tdap 
                <span class="checkbox">&#x2610;</span> ap 
                <span class="checkbox">&#x2610;</span> RSV vaccine
            </td>
        </tr>
        <tr>
            <td colspan="4">
                &nbsp;<span class="checkbox">&#x2610;</span> Anomaly scan 
                <span class="checkbox">&#x2610;</span> GBS screening 
                <span class="checkbox">&#x2610;</span> ตรวจฟัน
            </td>
        </tr>
        <tr>
            <td colspan="5" style="0.1px solid #000; width:5%;">
                &nbsp;Couple at risk for severe thalassemia disease 
                <span class="checkbox">&#x2610;</span> No <br>
                &nbsp;<span class="checkbox">&#x2610;</span> Yes ...................................................................................................
            </td>
            <td colspan="4" style="0.1px solid #000; width:5%;">
                &nbsp;Previous sx ..........................................<br>
                &nbsp;ADR <span class="checkbox">&#x2610;</span> No <span class="checkbox">&#x2610;</span> Yes ..........................
            </td>
            <td colspan="4">
                &nbsp;Down syndrome screening 
                <span class="checkbox">&#x2610;</span> Quad test 
                <span class="checkbox">&#x2610;</span> cell-free DNA<br>
                &nbsp;Result.............
                <span class="checkbox">&#x2610;</span>  Not done ...............
            </td>
        </tr>
        <tr>
            <td colspan="9">
               &nbsp;Potential DM: 
               <span class="checkbox">&#x2610;</span>High risk 
               <span class="checkbox">&#x2610;</span> Moderate risk 
               <span class="checkbox">&#x2610;</span>Low risk; 
               Suggestion...............................................
            </td>
            <td colspan="4">
                &nbsp;Previous PTB 
                <span class="checkbox">&#x2610;</span> No 
                <span class="checkbox">&#x2610;</span> Yes MP 200 mg vg supp 16-36 wk
            </td>
        </tr>
        <tr>
            <td colspan="9">
                &nbsp;Risk for PIH: 
                <span class="checkbox">&#x2610;</span> High risk <span style="font-family: 'DejaVu Sans';">&ge;</span> 1 ข้อ 
                <span class="checkbox">&#x2610;</span> Moderate <span style="font-family: 'DejaVu Sans';">&ge;</span> 2 ข้อ 
                <span class="checkbox">&#x2610;</span> Low risk; 
                Suggestion..........................
            </td>
            <td colspan="4"></td>
        </tr>
                </table>
    <table>
        <tr class="header">
            <td style="width: 5%;">Date</td>
            <td style="width: 5%;">BW</td>
            <td style="width: 9%;">Urine<br>protein/sugar</td>
            <td style="width: 3%;">BP</td>
            <td style="width: 4%;">HR</td>
            <td style="width: 3%;">FH</td>
            <td style="width: 4%;">FHB</td>
            <td style="width: 9%;">ดิ้น<span style="font-family: 'DejaVu Sans';">&ge;</span>10ครั้ง/วัน</td>
            <td style="width: 3%;">GA</td>
            <td style="width: 15%;">US</td>
            <td style="width: 18%;">Management</td>
            <td style="width: 7%;">นัดครั้งถัดไป</td>
            <td style="width: 5%;">ผู้ตรวจ</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="center"><span class="checkbox">&#x2610;</span> ใช่ <span class="checkbox">&#x2610;</span> ไม่ใช่</td>
            <td></td>
            <td>&nbsp;Position: Vx, Bx, Tx, N/A</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>&nbsp;CRL ........ mm, GA ...... wk</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>&nbsp;EFW ........ g (P10–50)</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>&nbsp;AFI ........ cm</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>&nbsp;Placenta: anterior/posterior</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>&nbsp;upper/middle/lower/previa</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>  

    <?php for ($i = 0; $i < 8; $i++): ?>
        <tr>
            <td height="28"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    <?php endfor; ?>
    </table>
</div>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>