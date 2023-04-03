@props(['queries'])

<div class="px-4 py-2 d-flex align-items-center gap-2">
    <h1 class="fw-bold">Queries</h1>

</div>
<div class="px-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($queries as $query)
                @php
                    $i++;
                @endphp
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $query->name }}</td>
                    <td>{{ $query->email }}</td>
                    <td>{{ $query->subject }}</td>
                    <td>{{ $query->message }}</td>
                    <td>{{ $query->phone }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
