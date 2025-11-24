<?php
require_once __DIR__ . '/../plugins/mpdf/mpdf.php';
$mpdf = new mPDF('utf-8', 'A4', 0, '', 15, 15, 15, 15);

ob_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Gynecological Ultrasound Report</title>
    <style>
        body {
            font-family: 'LateefRegOT', 'THSarabun', 'Garuda', Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 14px;
            line-height: 1.6;
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
            width: 80px;
            height: 80px;
            margin-right: 15px;
        }
        .logo img {
            width: 80px;
            height: 80px;
            filter: grayscale(100%);
            -webkit-filter: grayscale(100%);
        }
        .clinic-info {
            margin-bottom: 8px;
            text-align: left;
            padding-left: 225px;
        }
        .clinic-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
            line-height: 1.4;
        }
        .clinic-name-thai {
            font-size: 14px;
            margin-bottom: 4px;
            line-height: 1.4;
        }
        .clinic-address {
            font-size: 12px;
            margin-bottom: 4px;
            line-height: 1.5;
        }
        .patient-info {
            margin: 12px 0;
            border-bottom: 4px solid #000;
            padding-bottom: 8px;
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
            line-height: 1.4;
        }
        .section-title {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin: 15px 0;
            line-height: 1.4;
        }
        .section {
            margin: 12px 0;
        }
        .section-item {
            margin-bottom: 10px;
            line-height: 1.6;
            font-size: 12px;
        }
        .checkbox-group {
            display: inline-block;
            margin-right: 15px;
            line-height: 1.6;
        }
        .checkbox {
            font-family: 'DejaVu Sans';
            font-size: 20px;
        }
        .input-line {
            display: inline-block;
            border-bottom: 1px dotted #000;
            width: 40px;
            text-align: center;
            margin: 0 2px;
        }
        .input-line-wide {
            width: 60px;
        }
        .input-line-extra-wide {
            width: 100px;
        }
        .indent {
            margin-left: 20px;
            line-height: 1.8;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            line-height: 1.5;
        }
        .sub-section {
            margin-left: 20px;
            margin-bottom: 15px;
        }
        .two-column {
            display: flex;
            justify-content: space-between;
        }
        .column {
            width: 48%;
        }
        .placenta-location {
            margin-top: 10px;
        }
        .location-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- ส่วนหัว -->
    <div class="header">
        <div class="logo">
            <img src="Ginalogo.jpg" alt="Gina Clinic Logo">
        </div>
        <div class="clinic-info">
            <div class="clinic-name">GINA SURIN DUANCPHICHATBUT CLINIC Co.Ltd.</div>
            <div class="clinic-name-thai">บริษัท ซีปาลูวินทร์ ดวงหัวหนุนธร คลินิก จํากัด</div>
            <div class="clinic-address">
                2011 ถนนแหล่งบาท 2 ตําบลในเมือง 5 ตําบลเมืองผู้ใหญ่ ปีงบประมาณที่ 23000<br>
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

    <!-- รายงานผลอัลตราซาวด์ -->
    <div class="section-title">Gynecological ultrasound</div>
    
    <div class="section">
        <!-- Uterus -->
        <div class="section-item">
            <strong>Uterus:</strong>
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Anteversion</span>
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Retroversion</span>
            Size <span class="input-line"></span> X <span class="input-line"></span> x <span class="input-line"></span> cm.
        </div>

        <!-- Myoma uteri -->
        <div class="section-item">
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Myoma uteri</span>
            <div class="indent">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Size <span class="input-line"></span>……x……<span class="input-line"></span> cm. Type: 
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> submucous</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Intramural</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Subserous</span>;
                Location: anterior/posterior, upper/middle/lower<br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Size <span class="input-line"></span>……x……<span class="input-line"></span> cm. Type: 
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> submucous</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Intramural</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Subserous</span>;
                Location: anterior/posterior, upper/middle/lower<br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Size <span class="input-line"></span>……x……<span class="input-line"></span> cm. Type: 
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> submucous</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Intramural</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Subserous</span>;
                Location: anterior/posterior, upper/middle/lower
            </div>
        </div>

        <!-- Adenomyosis -->
        <div class="section-item">
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Adenomyosis:</span>
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Adenomyoma</span>
            Size <span class="input-line"></span><span class="input-line"></span> cm.;
            Location: anterior/posterior, upper/middle/lower
        </div>

        <!-- Endometrium polyp -->
        <div class="section-item">
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Endometrium polyp</span>
            <div class="indent">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Size <span class="input-line"></span>……x……<span class="input-line"></span> cm.; 
                Location: anterior/posterior, upper/middle/lower<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Size <span class="input-line"></span>……x……<span class="input-line"></span> cm.; 
                Location: anterior/posterior, upper/middle/lower<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Size <span class="input-line"></span>……x……<span class="input-line"></span> cm.; 
                Location: anterior/posterior, upper/middle/lower
            </div>
        </div>

        <!-- Right ovary -->
        <div class="section-item">
            <strong>Right ovary:</strong> Size <span class="input-line"></span>……x……<span class="input-line"></span> cm. 
            Number of follicles............. <span class="input-line input-line-wide"></span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ovarian cyst: 
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> No</span>
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Yes:</span>
            Functional cyst, corpus luteum cyst, endometriotic cyst, dermoid cyst
        </div>

        <!-- Left ovary -->
        <div class="section-item">
            <strong>Left ovary:</strong> Size <span class="input-line"></span>……x……<span class="input-line"></span> cm. 
            Number of follicles............... <span class="input-line input-line-wide"></span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ovarian cyst: 
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> No</span>
            <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Yes:</span>
            Functional cyst, corpus luteum cyst, endometriotic cyst, dermoid cyst
        </div>
    </div>

    <!-- หมายเหตุ -->
    <div class="footer">
        <strong>หมายเหตุ:</strong> รูปจะกําหนดได้ว่าจะได้คุ้ม!
    </div>

    <!-- หน้า 2: Obstetric Ultrasound -->
    <div style="page-break-before: always;">
        <!-- ส่วนหัว (เหมือนเดิม) -->
        <div class="header">
            <div class="logo">
                <img src="Ginalogo.jpg" alt="Gina Clinic Logo">
            </div>
            <div class="clinic-info">
                <div class="clinic-name">GINA SURIN DUANCPHICHATBUT CLINIC Co.Ltd.</div>
                <div class="clinic-name-thai">บริษัท ซีปาลูวินทร์ ดวงหัวหนุนธร คลินิก จํากัด</div>
                <div class="clinic-address">
                    2011 ถนนแหล่งบาท 2 ตําบลในเมือง 5 ตําบลเมืองผู้ใหญ่ ปีงบประมาณที่ 23000<br>
                    ประเทศไทย Tel. 098-458-9994
                </div>
            </div>
        </div>

        <!-- ข้อมูลผู้ป่วย (เหมือนเดิม) -->
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

        <!-- รายงานผลอัลตราซาวด์ทางสูติกรรม -->
        <div class="section-title">Obstetric ultrasound</div>

        <!-- First Trimester Ultrasound -->
        <div class="section">
            <div class="section-title" style="font-size: 16px; margin: 10px 0;">First Trimester ultrasound</div>
            
            <div class="section-item">
                <strong>CRL</strong> <span class="input-line input-line-extra-wide"></span> mm., 
                <strong>GA</strong> <span class="input-line input-line-extra-wide"></span> weeks, 
                <strong>EDC</strong> <span class="input-line input-line-extra-wide"></span>
            </div>

            <div class="section-item">
                <strong>Uterine mass:</strong>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> No</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Yes</span>
            </div>

            <div class="section-item">
                <strong>Adnexal mass:</strong>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> No</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Yes</span>
            </div>
        </div>

        <!-- Second & Third Trimester Ultrasound -->
        <div class="section">
            <div class="section-title" style="font-size: 16px; margin: 10px 0;">Second & Third Trimester Ultrasound</div>
            
            <div class="two-column">
                <div class="column">
                    <div class="section-item">
                        <strong>BPD</strong> <span class="input-line"></span> wk
                    </div>
                    <div class="section-item">
                        <strong>HC</strong> <span class="input-line"></span> wk
                    </div>
                    <div class="section-item">
                        <strong>AC</strong> <span class="input-line"></span> wk
                    </div>
                </div>
                <div class="column">
                    <div class="section-item">
                        <strong>FL</strong> <span class="input-line"></span> wk
                    </div>
                    <div class="section-item">
                        <strong>EFW</strong> <span class="input-line input-line-extra-wide"></span> g
                    </div>
                    <div class="section-item">
                        <strong>Greenville (0-50), ATI</strong> <span class="input-line"></span> cm.
                    </div>
                </div>
            </div>

            <div class="section-item">
                <strong>EDC</strong> <span class="input-line input-line-extra-wide"></span>
            </div>

            <!-- Placenta -->
            <div class="section-item placenta-location">
                <strong>Placenta:</strong>
                <div class="location-options">
                    <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Anterior</span>
                    <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Posterior</span>
                    <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Upper</span>
                    <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Middle</span>
                    <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Lower</span>
                    <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Previa</span>
                </div>
            </div>

            <div class="section-item">
                <strong>Sensibucant line:</strong>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> Yes</span>
                <span class="checkbox-group"><span class="checkbox">&#x2610;</span> No</span>
            </div>

            <div class="section-item">
                <strong>Other:</strong> <span class="input-line" style="width: 300px;"></span>
            </div>
        </div>

        <!-- หมายเหตุ -->
        <div class="footer">
            <strong>หมายเหตุ:</strong> รูปจะกําหนดได้ว่าจะได้คุ้ม!
        </div>
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