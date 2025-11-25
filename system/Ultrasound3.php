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
    <title>Ultrasound3</title>
</head>
<body>
    
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>