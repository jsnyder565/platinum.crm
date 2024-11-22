<div>Total Customers = {{$totalCustomers}}</div>
<div>Total Purchases = {{$totalPurchases}}</div>

<table>
    <thead>
        <tr>
            <th>Month</th>
            <th>Total Customers</th>
            <th>Average Spend</th>
            <th>Total Points Awarded</th>
            <th>Total Items Sold</th>
            <th>Total Revenue</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($months as $m)
            <tr>
                <td>{{ $m->month }}</td>
                <td>{{ $m->total_customers }}</td>
                <td>{{ $m->average_spend }}</td>
                <td>{{ $m->total_points }}</td>
                <td>{{ $m->total_items }}</td>
                <td>{{ $m->total_revenue }}</td>
            </tr>
        @endforeach
    </tbody>
</table>