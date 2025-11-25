<?php
require_once __DIR__ . '/../plugins/mpdf/mpdf.php';
// ลดค่า margin บนใน constructor จาก 10 เป็น 30
$mpdf = new mPDF('utf-8', 'A4-L', 0, '', 30, 30, 20, 30);

ob_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Risk factor for PIH</title>
    <style>
        body {
            font-family: 'THSarabun', 'Garuda', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .a4-size {
            margin-top: 20px; /* ขยับตารางลงมา */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td {
            border: 0.1px solid #111;
            padding: 4px 6px;
            vertical-align: top;
            text-align: left;
            font-size: 14px;
            height: auto;
            word-wrap: break-word;
            line-height: 1.3;
        }
        th {
            background: #f3f3f3;
        }
        .checkbox {
            font-size: 10px;
            font-family: 'DejaVu Sans', 'Garuda', 'THSarabun', Arial, sans-serif;
        }
        tr {
            height: auto;
        }
        .risk-cell {
            width: 73%;
        }
        .management-cell {
            width: 27%;
        }
    </style>
</head>
<body>
<br><br> <!-- เพิ่มบรรทัดว่าง -->
<div class="a4-size">
    <table>
        <tr>
            <td colspan="2" style="text-align:left; padding: 4px; font-size: 14px;">Risk factor for PIH</td>
        </tr>
        <tr>
            <td class="risk-cell">High risk <span style="font-family: 'DejaVu Sans';">&ge;</span> 1 ข้อ</td>
            <td class="management-cell">Management</td>
        </tr>
        <tr>
            <td class="risk-cell">              
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;History of PIH<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Multifetal pregnancy<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Chronic HT<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;DM<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Renal disease<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Autoimmune disease (eg. SLE, APS)<br>
            </td>
            <td class="management-cell">ASA (75) 2 tab oral hs at GA 11-36 weeks</td>
        </tr>   
        <tr>
            <td class="risk-cell">Moderate risk <span style="font-family: 'DejaVu Sans';">&ge;</span> 2 ข้อ</td>
            <td class="management-cell">Management</td>
        </tr>
        <tr>
            <td class="risk-cell">
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Nulliparity<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Obesity (BMI &gt; 30)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Family history of PIH (mother or sister)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Age <span style="font-family: 'DejaVu Sans';">&ge;</span> 35 years<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Previous low birth weight or small for gestational age<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Previous adverse pregnancy outcome<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;&gt; 10-year pregnancy interval<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;ART
            </td>
            <td class="management-cell"> ASA (75) 2 tab oral hs at GA 11-36 weeks</td>
        </tr>
        <tr>
            <td class="risk-cell">Low risk</td>
            <td class="management-cell">Management</td>
        </tr>
        <tr>
            <td class="risk-cell">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;None of above
            </td>
            <td class="management-cell">
                Routine ANC
            </td>
        </tr>
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