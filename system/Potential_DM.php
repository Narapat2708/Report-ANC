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
    <title>Potential DM Report</title>
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
            <td colspan="2" style="text-align:center; padding: 4px; font-size: 14px;">Potential DM</td>
        </tr>
        <tr>
            <td class="risk-cell">High risk</td>
            <td class="management-cell">Management</td>
        </tr>
        <tr>
            <td class="risk-cell">              
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;BMI &gt; 23<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;ญาติสายตรงเป็น DM<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;เคยคลอดบุตรคนก่อนน้ำหนัก &gt; 4,000 g<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;เคยเป็น GDM<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;HT<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;PCOS<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;HDL &lt; 35mg/dL, TG &gt; 250 mg/dL<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;A1C <span style="font-family: 'DejaVu Sans';">&ge;</span> 5.7%, impaired glucose tolerance, or impaired fasting glucose on previous testing<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;History of CVD
            </td>
            <td class="management-cell">
                50 g OGTT at first visit<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp; <span style="font-family: 'DejaVu Sans';">&ge;</span> 140 ให้ทำ 100g OGTT<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp; &lt; 140 ให้ 50 g OGTT at GA<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24-28 weeks
            </td>
        </tr>   
        <tr>
            <td class="risk-cell">Moderate risk</td>
            <td class="management-cell">Management</td>
        </tr>
        <tr>
            <td class="risk-cell">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;Age <span style="font-family: 'DejaVu Sans';">&ge;</span> 30 years
            </td>
            <td class="management-cell">
                50 g OGTT at GA 24-28 weeks
            </td>
        </tr>
        <tr>
            <td class="risk-cell">Low risk</td>
            <td class="management-cell">Management</td>
        </tr>
        <tr>
            <td class="risk-cell">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="checkbox">&#x2610;</span>&nbsp;&nbsp;&nbsp;None of above
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