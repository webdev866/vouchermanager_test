<html>

<head>
    <meta charset="utf-8">
    <title>Voucher Manager</title>
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="license" href="https://www.opensource.org/licenses/mit-license/">
</head>

<body>
    <center><span><img alt="" src="logo.png"></span></center>
    <header>

        <center>
            <p class="title"> AL MUAYED TRAVEL & TOURISM Co.</p>
        </center>

        <h1>VOUCHER</h1>




    </header>
    <article>


        <table class="meta">
            <tr>
                <th><span contenteditable>Voucher #</span></th>
 @php
                $voucherid = str_pad($createVoucher->id, 4, 0, STR_PAD_LEFT);
                @endphp
                <td><span contenteditable> {{ $voucherid }} </span></td>
            </tr>
            <tr>
                <th><span contenteditable>Guest's Name </span></th>
                <td><span contenteditable>{{ $createVoucher->client_name }}</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Arrival Date </span></th>
                <td><span contenteditable>{{ $createVoucher->arrivaldate }}</span></td>
            </tr>
            <tr>
                <th><span contenteditable>Departure Date</span></th>
                <td><span contenteditable>{{ $createVoucher->departuredate }}</span></td>
            </tr>

        </table>
        <table class="inventory">
            <thead>
                <tr>
                    <th><span contenteditable>Hotel</span></th>
                    <th><span contenteditable>No Of Nights</span></th>
                    <th><span contenteditable>Rate Per Night</span></th>
                    <th><span contenteditable>Room Type</span></th>
                    <th><span contenteditable>Rooms</span></th>
                    <th><span contenteditable>Payment Method</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $createVoucher->hotel_name->hotel_name ?? '' }}<span contenteditable></span></td>
                    <td><span contenteditable>{{ $createVoucher->night }}</span></td>
                    <td><span data-prefix>MAD {{ $createVoucher->room_price }}</span><span contenteditable></span></td>
                    <td><span contenteditable>{{ $createVoucher->room_type->room_type}}</span></td>
                    <td><span data-prefix>{{ $createVoucher->number_of_room }}</span><span></span></td>
                    <td><span contenteditable> {{ App\CreateVoucher::PAYMENT_MODE_SELECT[$createVoucher->payment_mode] ?? '' }}</span></td>
                </tr>
            </tbody>
        </table>
        <table class="balance">
            <tr>
                <th><span contenteditable>Total</span></th>
                <td><span data-prefix>MAD</span><span> {{$createVoucher->total_amount}}</span></td>
            </tr>
        </table>
    </article>
    <aside>
        <h1><span contenteditable>Service</span></h1>
        <p>{{ $createVoucher->service }}</p>
    </aside>
    <aside>
        <h1><span contenteditable>Observation</span></h1>
        <p>{{ $createVoucher->observation }}</p>
    </aside>
</body>

</html>
