@props(['cdpaps'])

<div class="px-4 py-2 d-flex align-items-center gap-2">
    <h1 class="fw-bold">Cdpaps</h1>

</div>
<div class="px-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">patient</th>
                <th scope="col">medicate</th>
                <th scope="col">Medicaid to join.</th>
                
                
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($cdpaps as $cdpap)
                @php
                    $i++;
                @endphp
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $cdpap->first_name }}</td>
                    <td>{{ $cdpap->last_name }}</td>
                    <td>{{ $cdpap->phone }}</td>
                    <td>{{ $cdpap->email }}</td>
                    <td>{{ $cdpap->patient }}</td>
                    <td>{{ $cdpap->medicaid }}</td>
                    <td>{{ $cdpap->joinmedicate }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
