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
            <th>ID (id)</th>
            <th>Customer ID (customer_id)</th>
            <th>Purchasable (purchasable)</th>
            <th>Price (price)</th>
            <th>Quantity (quantity)</th>
            <th>Total (total)</th>
            <th>Date (purchase_date)</th>
            <th>DateString (purchase_date_string)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($purchases as $purchase)
            <tr>
                <td>{{ $purchase->id }}</td>
                <td>{{ $purchase->customer_id }}</td>
                <td>{{ $purchase->purchasable }}</td>
                <td>{{ $purchase->price }}</td>
                <td>{{ $purchase->quantity }}</td>
                <td>{{ $purchase->total }}</td>
                <td>{{ $purchase->purchase_date }}</td>
                <td>{{ $purchase->purchase_date_string }}</td>
            </tr>
        @endforeach
    </tbody>
</table>