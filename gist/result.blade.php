<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Created</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone_number}}</td>   
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->loyalty_points }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Purchasable</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($purchases as $purchase)
            <tr>
                <td>{{ $purchase->customer_id }}</td>
                <td>{{ $purchase->purchasable }}</td>
                <td>{{ $purchase->price }}</td>
                <td>{{ $purchase->quantity }}</td>
                <td>{{ $purchase->total }}</td>
                <td>{{ $purchase->date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>