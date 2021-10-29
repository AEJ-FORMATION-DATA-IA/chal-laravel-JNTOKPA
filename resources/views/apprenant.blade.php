@extends ("layout.master")

@section("contenu")
<h2 class="mb-5 mt-2">Liste des apprenants</h2>
<div class="table-responsive">
    <div class="d-flex justify-content-between">
        {{ $apprenants->links() }}
        <div>
            <a href="{{ route('ajoutApprenant') }}" class="btn btn-secondary">Ajouter un Apprenant</a>
        </div>
    </div>
    @if (session()->has("successDelete"))
    <p class="text-success">{{ session()->get("successDelete") }}</p>
    @endif
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenoms</th>
                <th scope="col">Email</th>
                <th scope="col">Formation</th>
                <th scope="col">Groupe</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apprenants as $a)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $a->nom }}</td>
                <td>{{ $a->prenom }}</td>
                <td>{{ $a->mail }}</td>
                <td>{{ $a->formation->libelle }}</td>
                <td>GROUPE {{ $a->groupe }}</td>
                <td>
                    <a href="{{ route('modifApprenant', $a->id) }}" class="btn btn-secondary">Modifier</a>
                    <a href="{{ route('apprenantSupprimer', $a->id) }}" class="btn btn-danger">Supprimer</a>


                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    @endsection