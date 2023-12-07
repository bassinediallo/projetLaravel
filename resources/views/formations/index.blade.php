<h1>
    <marquee behavior="" direction="">Liste des Formations</marquee>
</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>INFORMATIQUE</th>
            <th>COMPTABILITE</th>
            <th>MEDECINE</th>
            <th>DROIT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($formations as $formation)
            <tr>
                <td>{{ $formation->id }}</td>
                <td>{{ $formation->INFORMATIQUE }}</td>
                <td>{{ $formation->COMPTABILITE }}</td>
                <td>{{ $formation->MEDECINE }}</td>
                <td>{{ $formation->DROIT }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
