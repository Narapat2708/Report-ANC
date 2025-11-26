<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Gynecological Ultrasound Report (A4 Interactive Layout)</title>
    <style>
        /* A4 print settings: Defines the actual print page size and margins */
        @media print {
            @page {
                size: A4;
                margin: 0.5cm 1cm;
            }
            body {
                margin: 0;
                padding: 0;
            }
            .container {
                box-shadow: none;
                padding: 0;
            }
        }

        /* General Body and Container Styles for Screen View (to simulate A4) */
        body {
            font-family: 'TH Sarabun New', 'Sarabun', 'Garuda', Arial, sans-serif;
            font-size: 11pt;
            line-height: 1.4;
            margin: 0 auto;
            padding: 0;
            color: #000;
            background-color: #f0f0f0;
        }

        .container {
            width: 210mm;
            min-height: 297mm;
            margin: 1cm auto;
            padding: 1.5cm;
            box-sizing: border-box;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        /* --- Header Section --- */
        .header {
            display: flex;
            align-items: flex-start;
            border-bottom: 4px solid #000;
            padding-bottom: 8px;
            margin-bottom: 5px;
        }

        .logo {
            width: 130px;
            flex-shrink: 0;
            margin-right: 20px;
            margin-top: -10px;
        }
        .logo img {
            width: 100%;
            height: auto;
        }

        .clinic-info {
            flex-grow: 1;
            text-align: left;
            padding-top: 5px;
        }
        .clinic-name {
            font-size: 13pt;
            font-weight: bold;
            margin-bottom: 2px;
        }
        .clinic-address {
            font-size: 9pt;
            line-height: 1.5;
        }

        /* --- Patient Info Section --- */
        .patient-info {
            margin: 0 0 5px 0;
            padding-bottom: 5px;
            border-bottom: 4px solid #000;
        }
        .info-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 5px;
            padding: 2px 0;
        }
        .info-item {
            flex-shrink: 0;
            padding: 0 5px;
            margin-right: 5px;
            border-right: 1px solid #000;
            white-space: nowrap;
            font-size: 10pt;
            display: flex;
            align-items: center;
        }
        .info-item:last-child {
            border-right: none;
            margin-right: 0;
        }
        .info-label {
            font-weight: bold;
            margin-right: 3px;
        }
        
        /* --- General Input/Line Styles --- */
        .input-line {
            display: inline-block;
            border: none; /* Remove default border */
            border-bottom: 1px dotted #000; /* Dotted line for input field */
            width: 30px;
            text-align: center;
            margin: 0 2px;
            height: 1.2em;
            vertical-align: middle;
            background-color: transparent;
            font-family: inherit; /* Use same font as body */
            font-size: 10pt;
            padding: 0;
        }
        .input-line-small { width: 20px; }
        .input-line-medium { width: 50px; }
        .input-line-large { width: 100px; }

        /* Custom line styles for patient info to fill space */
        .name-line { width: 150px; }
        .cn-line { width: 60px; }
        .long-label-line { width: 40px; }
        .physician-line { width: 100px; }


        /* --- Checkbox Styles --- */
        .checkbox-item input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }


        /* --- Ultrasound Section --- */
        .section-title {
            text-align: center;
            font-weight: bold;
            font-size: 14pt;
            margin: 10px 0 5px 0;
        }
        .section-content {
            font-size: 10pt;
            line-height: 1.8;
            padding: 0 5px;
        }
        
        .checkbox-group {
            margin-bottom: 0px;
            display: block;
        }
        .checkbox-item {
            margin-right: 15px;
            display: inline-block;
        }
        
        .indent-level-1 {
            margin-left: 20px;
        }

        /* --- Ovary Section Adjustments --- */
        .ovary-text {
            display: block;
            margin-top: 5px;
        }
        .ovary-cyst-options {
            display: inline-block;
            margin-left: 70px;
        }


        /* --- Footer/Table Section --- */
        .table-container {
            margin-top: 15px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #000;
            padding: 5px;
            vertical-align: top;
            font-size: 10pt;
        }
        .large-box {
            height: 350px;
            text-align: left;
            padding-left: 10px;
        }
        .footer {
            text-align: center;
            font-size: 9pt;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    
    <div class="header">
        <div class="logo">
            <img src="LogoGina.png" alt="Gina Clinic Logo"> 
        </div>
        <div class="clinic-info">
            <div class="clinic-name">GINA SURIN DUANGPHICHATBUT CLINIC Co.Ltd.</div>
            <div class="clinic-name">บริษัท จีน่าสุรินทร์ ดวงภิชาตบุตร คลินิก จำกัด</div>
            <div class="clinic-address">
                551/1 ถนนเทศบาล 1 ตำบลในเมือง อำเภอเมืองสุรินทร์ จังหวัดสุรินทร์ 32000<br>
                ประเทศไทย Tel. 098-458-9994
            </div>
        </div>
    </div>

    <div class="patient-info">
        <div class="info-row">
            <div class="info-item">
                <span class="info-label">Name (F)</span> <input type="text" class="input-line name-line">
            </div>
            <div class="info-item">
                <span class="info-label">Age</span> <input type="text" class="input-line input-line-small">
            </div>
            <div class="info-item">
                <span class="info-label">D.O.B.</span> <input type="text" class="input-line input-line-medium">
            </div>
            <div class="info-item">
                <span class="info-label">CN</span> <input type="text" class="input-line cn-line">
            </div>
            <div class="info-item">
                <span class="info-label">สัญชาติไทย/อื่นๆ</span> <input type="text" class="input-line input-line-medium">
            </div>
            <div class="info-item" style="border-right: none;">
                <span class="info-label">เชื้อชาติไทย/อื่นๆ</span> <input type="text" class="input-line input-line-medium">
            </div>
        </div>
        <div class="info-row">
            <div class="info-item">
                <span class="info-label">Physician</span> <input type="text" class="input-line physician-line">
            </div>
            <div class="info-item">
                <span class="info-label">INF. No.</span> <input type="text" class="input-line physician-line">
            </div>
            <div class="info-item">
                <span class="info-label">Location</span> <input type="text" class="input-line cn-line">
            </div>
            <div class="info-item">
                <span class="info-label">LMP</span><input type="text" class="input-line long-label-line">/<input type="text" class="input-line long-label-line">/<input type="text" class="input-line long-label-line">
            </div>
            <div class="info-item">
                <span class="info-label">BW</span><input type="text" class="input-line long-label-line">.<input type="text" class="input-line long-label-line">
            </div>
            <div class="info-item">
                <span class="info-label">BP</span><input type="text" class="input-line long-label-line">/<input type="text" class="input-line long-label-line">
            </div>
            <div class="info-item" style="border-right: none;">
                <span class="info-label">HR</span><input type="text" class="input-line long-label-line">
            </div>
        </div>
    </div>

    <div class="section-title">Gynecological ultrasound</div>
    
    <div class="section-content">
        <div class="checkbox-group">
            <strong>Uterus:</strong>
            <span class="checkbox-item"><input type="checkbox"> Anteversion</span>
            <span class="checkbox-item"><input type="checkbox"> Retroversion</span>
            Size <input type="text" class="input-line"> X <input type="text" class="input-line"> x <input type="text" class="input-line"> cm.
        </div>

        <div class="checkbox-group">
            <span class="checkbox-item"><strong><input type="checkbox"> Myoma uteri</strong></span>
            <div class="indent-level-1">
                1. Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm. Type: 
                <span class="checkbox-item"><input type="checkbox"> submucous</span>
                <span class="checkbox-item"><input type="checkbox"> Intramural</span>
                <span class="checkbox-item"><input type="checkbox"> Subserous</span>;
                Location: anterior/posterior, upper/middle/lower<br>
                
                2. Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm. Type: 
                <span class="checkbox-item"><input type="checkbox"> submucous</span>
                <span class="checkbox-item"><input type="checkbox"> Intramural</span>
                <span class="checkbox-item"><input type="checkbox"> Subserous</span>;
                Location: anterior/posterior, upper/middle/lower<br>
                
                3. Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm. Type: 
                <span class="checkbox-item"><input type="checkbox"> submucous</span>
                <span class="checkbox-item"><input type="checkbox"> Intramural</span>
                <span class="checkbox-item"><input type="checkbox"> Subserous</span>;
                Location: anterior/posterior, upper/middle/lower
            </div>
        </div>

        <div class="checkbox-group">
            <span class="checkbox-item"><strong><input type="checkbox"> Adenomyosis:</strong></span>
            <span class="checkbox-item"><strong><input type="checkbox"> Adenomyoma</strong></span>
            Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm.;
            Location: anterior/posterior, upper/middle/lower
        </div>

        <div class="checkbox-group">
            <span class="checkbox-item"><strong><input type="checkbox"> Endometrium polyp</strong></span>
            <div class="indent-level-1">
                1. Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm.; 
                Location: anterior/posterior, upper/middle/lower<br>
                2. Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm.; 
                Location: anterior/posterior, upper/middle/lower<br>
                3. Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm.; 
                Location: anterior/posterior, upper/middle/lower
            </div>
        </div>

        <div class="checkbox-group ovary-text">
            <strong>Right ovary:</strong> Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm. 
            Number of follicles <input type="text" class="input-line input-line-medium">
            <span class="ovary-cyst-options">
                Ovarian cyst: 
                <span class="checkbox-item"><input type="checkbox"> No</span>
                <span class="checkbox-item"><input type="checkbox"> Yes:</span>
                Functional cyst, corpus luteum cyst, endometriotic cyst, dermoid cyst
            </span>
        </div>

        <div class="checkbox-group ovary-text">
            <strong>Left ovary:</strong> Size <input type="text" class="input-line"> x <input type="text" class="input-line"> cm. 
            Number of follicles <input type="text" class="input-line input-line-medium">
            <span class="ovary-cyst-options">
                Ovarian cyst: 
                <span class="checkbox-item"><input type="checkbox"> No</span>
                <span class="checkbox-item"><input type="checkbox"> Yes:</span>
                Functional cyst, corpus luteum cyst, endometriotic cyst, dermoid cyst
            </span>
        </div>
    </div>
    
    <div class="table-container">
        <table>
            <tr>
                <th class="large-box">
                    รูปและคำอธิบายใต้ภาพที่จะใส่รูป
                </th>
            </tr>
        </table>
    </div>
    
    <div class="footer">
        รูป ๗๙ กำหนดได้ว่าจะใส่ที่รูป
    </div>

</div>
</body>
</html>