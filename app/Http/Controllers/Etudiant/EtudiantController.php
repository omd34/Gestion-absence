<?php

namespace App\Http\Controllers\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Declaration;
use App\Etudiant;
use App\Absence;
use App\Seance;
use Auth;
class EtudiantController extends Controller
{
    
   //page d'acceuil etudiant
    public function index()
    {
        return view('Etudiant.EspaceEtudiant');
    }

    //justifier une absence aupres d'un professeur
    public function declarerabsence(){


        return view('Etudiant.declaration');
    }


    // afficher l'historique d'absence 
    public function historiqueAbsence()
    {
        $id_etu=Etudiant::select('id')->where('id_user','=',auth::user()->id)->get()[0]->id;
        
        $matieres = Absence::where('id_etu','=',$id_etu)->get();
        $seances = Seance::with('seancematiere')
        ->where('active',1)
        ->get();
            $absence= array();
        foreach($seances as $key=>$s){
            $absence[$key] = $s->absences()->get()->where('id_etu','=',$id_etu);
        }

        
    return view('Etudiant.historiqueAbsence',compact('seances','absence','matieres'));
    }

    //creer un etat pour la declaration d'un etudiant avec toutes les informations le concernant
    public function createDeclaration(Request $request){
        
    }


    //enregistrer la declaration d'un etudiant dans la base de donness

    public function saveDeclaration(Request $request)
    {
        //validation
  
        $request->validate([
            'A' => 'required',
            'justificatif' => 'required',
            'date_absence' => 'required',
            'description' =>'required',
        ]);
       
      // save into DB
  try {

    //**ajout */
    /*$table->id();
            $table->string('description');
            $table->date('date_absence');
            $table->string('justificatif');
            $table->timestamps();
            $table->foreignId('id_etu')->constrained('etudiants')
            ->onDelete('cascade');


            $table->foreignId('id_sea')->constrained('seances')
            ->onDelete('cascade');

    //ajout*/
        $declaration = new Declaration;
       
        $declaration -> mail = $request->input('A');
        $declaration-> description = $request->input('description');
        $declaration-> date = $request->input('date_absence');
        $declaration -> justificatif = $request->input('justificatif');
           
        $declaration ->save();

        return redirect()->route('home.etudiant')->with(['success' => 'seance est Bien Ajoute']);
    
    } catch (\Exception $ex) {
    
        return redirect()->route('declaration.absence')->with(['error' => 'Erreur!!! ']);
    }

    }
}
