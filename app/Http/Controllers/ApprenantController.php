<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Formation;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function lister()
    {
        $apprenants = Apprenant::orderBy("nom", "asc")->paginate(10);
        return view("apprenant", compact("apprenants"));
    }

    public function ajouter()
    {
        $formations = Formation::all();
        return view("ajoutApprenant", compact("formations"));
    }

    public function editer($id)
    {
        $apprenant = Apprenant::findOrfail($id);
        $formations = Formation::all();

        return view("modifApprenant", compact("apprenant", "formations"));
    }

    public function inserer(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "mail" => "required",
            "groupe" => "required",
            "formation_id" => "required"
        ]);

        Apprenant::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "mail" => $request->mail,
            "groupe" => $request->groupe,
            "formation_id" => $request->formation_id,
        ]);

        return back()->with("success", "Apprenant enregistré avec succès!");
    }

    public function supprimer($id)
    {
        $apprenant = Apprenant::findOrfail($id);
        $nom_complet = $apprenant->nom . " " . $apprenant->prenom;
        $apprenant->delete();

        return back()->with("successDelete", "Apprenant '$nom_complet' supprimé avec succès");
    }

    public function modifier(Request $request, $id)
    {
        $info = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "mail" => "required",
            "groupe" => "required",
            "formation_id" => "required"
        ]);

        Apprenant::whereId($id)->update($info);

        return back()->with("success", "Apprenant mis à jour avec succès!");
    }
}
