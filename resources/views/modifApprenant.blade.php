@extends("layout.master")

@section("contenu")
<h2 class="mb-5 mt-2">Modifier les informations</h2>

@if (session()->has("success"))
<p class="text-success">{{ session()->get("success") }}</p>
@endif

@if($errors->any())
@foreach($errors->all() as $error)
<p class="text-danger"><strong>{{ $error }}</strong></p>
@endforeach
@endif

<form class="row g-3" method="POST" action="{{ route('traitement.modif', ['apprenant'=>$apprenant->id]) }}">
    @csrf

    <!--input type="hidden" name="_method" value="put"-->

    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Nom</label>
        <input type="text" class="form-control" id="validationDefault01" name="nom" value="{{ $apprenant->nom }}">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Prenoms</label>
        <input type="text" class="form-control" id="validationDefault02" name="prenom" value="{{ $apprenant->prenom }}">
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Email</label>
        <input type="email" class="form-control" id="validationDefault02" name="mail" value="{{ $apprenant->mail }}">
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Groupe</label>
        <select class="form-select" id="validationDefault04" name="groupe">
            <option selected disabled value="">Choisir le groupe</option>
            @if ($apprenant->groupe == 1)
            <option value="1" selected>GROUPE 1</option>
            <option value="2">GROUPE 2</option>
            @endif
            @if ($apprenant->groupe == 2)
            <option value="1">GROUPE 1</option>
            <option value="2" selected>GROUPE 2</option>
            @endif
        </select>
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Formation</label>
        <select class="form-select" id="validationDefault04" name="formation_id">
            <option selected disabled value="">Choisir la formation</option>
            @foreach ($formations as $f)
            @if ($f->id == $apprenant->formation_id)
            <option value="{{ $f->id }}" selected>{{ $f->libelle }}</option>
            @else
            <option value="{{ $f->id }}">{{ $f->libelle }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-secondary" type="submit">ENREGISTRER</button>
        <a class="btn btn-danger" href="{{ route('accueil') }}">ANNULER</a>
    </div>
</form>
@endsection