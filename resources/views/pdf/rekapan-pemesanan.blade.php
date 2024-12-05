<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapan Pemesanan</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Rekapan Pemesanan</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Kamar</th>
                <th>Tamu</th>
                <th>Harga permalam</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->customer_name }}</td>
                <td>{{ $booking->check_in }}</td>
                <td>{{ $booking->check_out }}</td>
                <td>{{ $booking->room }}</td>
                <td>{{ $booking->guest }}</td>
                <td>{{ $booking->price_per_night }}</td>
                <td>{{ $booking->total_price }}</td>
                <td>{{ $booking->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
