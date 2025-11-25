<?php
require_once __DIR__ . '/../plugins/mpdf/mpdf.php';
$mpdf = new mPDF('utf-8', 'A4', 0, '', 15, 15, 15, 15);

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultrasound2</title>
    <style>
        body {
            font-family: 'LateefRegOT', 'THSarabun', 'Garuda', Arial, sans-serif;
            margin: 10px;
            padding: 0;
            font-size: 14px;
        }
        .container {
            width: 100%;
            padding: 10px;
            padding-top: 1px;
        }
        .header {
            text-align: center;
            margin-bottom: 5px;
            border-bottom: 4px solid #000;
            padding-bottom: 8px;
        }
        .logo {
            float: left;
            width: 130px;
            height: 80px;
            margin-right: 15px;
            margin-left: 70px;
            margin-top: -30px;
        }
        .clinic-info {
            text-align: left;
            padding-left: 225px;
            margin-top: -3px;
        }
        .clinic-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: -10px;
        }
        .clinic-name-thai {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: -5px;
        }
        .clinic-address {
            font-size: 11px;
        }
        .patient-info {
            margin: 12px 0;
            border-bottom: 4px solid #000;
            padding-bottom: 5px;
            margin-bottom: -2px;
        }
        .info-row {
            display: flex;
            margin-bottom: 8px;
            align-items: center;
            flex-wrap: nowrap;
        }
        .info-item {
            flex-shrink: 0;
            padding: 0 5px;
            white-space: nowrap;
            display: flex;
            align-items: center;
            position: relative;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: -5px;
        }
        .info-item:not(:last-child)::after {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 1px;
            background-color: #000;
        }
        .info-label {
            display: inline-block;
            min-width: 50px;
            margin-right: 5px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            
        }
        td, th {
            border: 0.1px solid #000;
            padding: 3px;
            vertical-align: top;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- ส่วนหัว -->
    <div class="header">
        <div class="logo">
            <img src="LogoGina.png" alt="Gina Clinic Logo">
        </div>
        <div class="clinic-info">
            <div class="clinic-name">GINA SURIN DUANGPHICHATBUT CLINIC Co.Ltd.</div>
            <div class="clinic-name-thai">บริษัท จีน่าสุรินทร์ ดวงภิชาตบุตร คลินิก จากัด</div>
            <div class="clinic-address">
                551/1 ถนนเทศบาล 1 ตาบลในเมือง อาเภอเมืองสุรินทร์ จังหวัดสุรินทร์ 32000<br>
                ประเทศไทย Tel. 098-458-9994
            </div>
        </div>
    </div>

    <!-- ข้อมูลผู้ป่วย -->
    <div class="patient-info">
        <div class="info-row">
            <div class="info-item">
                <span class="info-label">Name (F)</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">Age</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">D.O.B.</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">CN</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">สัญชาติไทย/อื่นๆ.............</span>
                <span class="info-label">เชื้อชาติไทย/อื่นๆ............</span>
            </div>
        </div>
        <div class="info-row">
            <div class="info-item">
                <span class="info-label">Physician</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">INF. No.</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">Location</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="info-label">LMP.................</span>
                <span class="info-label">BW...........</span>
                <span class="info-label">BP...........</span>
                <span class="info-label">HR...........</span>
            </div>
        </div>
    </div>
    
    <!-- อัลตราซาวนด์สูติกรรม -->
    <div class="section-title">Obstetric ultrasound
        <table>
            <tr>
                <th>First Trimester ultrasound</th>
            </tr>
            <tr>
                <th>CRL…….. mm., GA…………..weeks., EDC …………..…………..</th>
            </tr>
            <tr>
                <th>Uterine mass:  No  Yes …………..…………..…………..…………..</th>
            </tr>
            <tr>
                <th>Adnexal mass:  No  Yes …………..…………..…………..…………..</th>
            </tr>
        </table>
        <br><br>
        <table>
            <tr>
                <th>Second & Third Trimester Ultrasound</th>
            </tr>
            <tr>
                <th>BPD ……….. wk, HC ……….. wk, AC ……….. wk, FL ……….. wk</th>
            </tr>
            <tr>
                <th>EFW ……….. g (Percentile 10-50), AFI ……….. cm. EDC …………..…………..</th>
            </tr>
            <tr>
                <th>Placenta:  Anterior  Posterior  Upper  Middle  Lower  Previa</th>
            </tr>
            <tr>
                <th>Sonolucent line:  Yes  No</th>
            </tr>
            <tr>
                <th>Other …………..………….. …………..…………..…………..…………..…………..……</th>
            </tr>
        </table>
        
    </div>


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