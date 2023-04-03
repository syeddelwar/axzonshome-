@props(['homecares'])

<div class="px-4 py-2 d-flex align-items-center gap-2">
    <h1 class="fw-bold">homecares</h1>

</div>
<div class="px-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">subject</th>
                <th scope="col">Comments</th>
                
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($homecares as $homecare)
                @php
                    $i++;
                @endphp

    
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $homecare->name }}</td>
                    <td>{{ $homecare->email }}</td>
                    <td>{{ $homecare->phone }}</td>
                    <td>{{ $homecare->subject }}</td>
                    <td>{{ $homecare->comments }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
