<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 10px; }
        h2 { margin: 0 0 6px 0; }
        .small { font-size: 9px; margin-bottom: 8px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #999; padding: 4px; vertical-align: top; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>

<h2>Users + Trees Report (Filtered)</h2>

<div class="small">
    <b>Filters:</b>
    Role: {{ $filters['role'] ?? '-' }} |
    Status: {{ $filters['status'] ?? '-' }} |
    City: {{ $filters['city'] ?? '-' }} |
    From: {{ $filters['from'] ?? '-' }} |
    To: {{ $filters['to'] ?? '-' }}
</div>

<table>
    <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>User City</th>
            <th>User State</th>
            <th>Role</th>
            <th>Status</th>

            <th>Tree Name</th>
            <th>Planting Date</th>
            <th>Height</th>
            <th>Age</th>
            <th>Health</th>
            <th>Village</th>
            <th>Tree City</th>
            <th>Tree State</th>
            <th>Country</th>
        </tr>
    </thead>

    <tbody>
        @forelse($data as $row)
            <tr>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->mobile }}</td>
                <td>{{ $row->user_city }}</td>
                <td>{{ $row->user_state }}</td>
                <td>{{ $row->role }}</td>
                <td>{{ $row->status }}</td>

                <td>{{ $row->treeName ?? '-' }}</td>
                <td>{{ $row->plantingDate ?? '-' }}</td>
                <td>{{ $row->height ?? '-' }}</td>
                <td>{{ $row->age ?? '-' }}</td>
                <td>{{ $row->health ?? '-' }}</td>
                <td>{{ $row->village ?? '-' }}</td>
                <td>{{ $row->tree_city ?? '-' }}</td>
                <td>{{ $row->tree_state ?? '-' }}</td>
                <td>{{ $row->country ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="17">No data found for given filters.</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
