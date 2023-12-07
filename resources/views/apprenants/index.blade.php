<h1>Liste des Apprenants</h1>

<ul>
    @foreach ($apprenants as $apprenant)
        <li>{{ $apprenant->nom }} {{ $apprenant->prenom }}</li>
    @endforeach
</ul>
