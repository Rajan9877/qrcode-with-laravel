<!-- resources/views/qrcode.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>QR Code Generator</title>
</head>
<body>
    <h1>Generated QR Code</h1>
    {{-- <img src="data:image/png;base64,{{ base64_encode($qrcode) }}" alt="QR Code"> --}}
    {!! $qrcode !!} 
</body>
</html>
