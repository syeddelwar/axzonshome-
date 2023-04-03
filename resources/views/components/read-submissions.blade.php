@props(['submissions'])

<div class="px-4 py-2 d-flex align-items-center gap-2">
    <h1 class="fw-bold">Submissions</h1>

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
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($submissions as $submission)
                @php
                    $i++;
                @endphp
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $submission->name }}</td>
                    <td>{{ $submission->email }}</td>
                    <td>{{ $submission->subject }}</td>
                    <td>{{ $submission->message }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
