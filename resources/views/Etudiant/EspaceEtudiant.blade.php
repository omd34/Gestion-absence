
@extends('layouts.etudiant')

@section('content')

  <section class="about text-center">
    <div class="container">
    <h1>Espace <span>Etudiant</span> </h1>
    <p class="lead">Bienvenue dans votre espace ,vous pouvez utiliser cette application <strong> Gestion des absences </strong> pour créer declarer des absences et consulter l'historique de vos absences
    </p>
   </div>
  </section>

  <section class="features text-center">
     <div class="container">
            <h1>Services</h1>
        <div class="row"><!-- featues1 -->
                <div class=" col-md-6  col-xs-12 ">
                        <div class="feat"> <!--my div -->
                            <i class="fa fa-pencil" style="font-size:48px;" aria-hidden="true"></i>
                            <h4>Justifier une absence</h4>
                            <p class="lead">Justifier vos absences lorsque vous avez manquer a une seance  </p>
                            <a href="{{ route('declaration.absence')}}" class="btn btn-primary">Start</a>
                        </div>
                </div>
                
              <div class=" col-md-6  col-xs-12 ">
                    <div class="feat"> <!--my div -->
                        <i class="fa fa-newspaper-o" style="font-size:48px;" aria-hidden="true"></i>
                        <h4>Consulter l'historique</h4>
                        <p class="lead"> Consulter l'historique de vos absences</p>
                        <a href="{{ route('historique.Absence')}}" class="btn btn-primary">Start</a>
                    </div>
              </div>        
        </div>
     </div>
  
 </section>     
@endsection