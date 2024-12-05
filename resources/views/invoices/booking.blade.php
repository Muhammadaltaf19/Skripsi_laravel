<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pemesanan - {{ $booking->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Invoice Pemesanan</h1>
        </div>
        <div class="invoice-details">
            <p><strong>Nomor Invoice:</strong> INV-{{ $booking->id }}</p>
            <p><strong>Tanggal:</strong> {{ date('d/m/y') }}</p>
        </div>
        <table>
            <tr>
                <th>Detail</th>
                <th>Informasi</th>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>{{ $booking->customer_name }}</td>
            </tr>
            <tr>
                <td>Kamar</td>
                <td>{{ $booking->room }}</td>
            </tr>
            <tr>
                <td>Check In</td>
                <td>{{ $booking->check_in instanceof \Carbon\Carbon ? $booking->check_in->format('d/m/Y') : $booking->check_in }}</td>
            </tr>
            <tr>
                <td>Check Out</td>
                <td>{{ $booking->check_out instanceof \Carbon\Carbon ? $booking->check_out->format('d/m/Y') : $booking->check_out }}</td>
            </tr>
            <tr>
                <td>Jumlah Tamu</td>
                <td>{{ $booking->guest }}</td>
            </tr>

            <tr>
                <td>Harga per Malam</td>
                <td>Rp {{ number_format($booking->price_per_night, 2) }}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>Rp {{ number_format($booking->total_price, 2) }}</td>
            </tr>
            <tr>
                <td>Bank BCA</td>
                <td>123457890</td>
            </tr>
            <tr>
                <td colspan="2" style="color: red; text-align: center;">
                    <strong>Harap segera melakukan pembayaran!</strong>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
