
@extends('layouts.etudiant')

@section('content')
    <div class="container">

     <h3><i class="fa fa-user-circle-o"></i>Déclaration d'absence</h3>
        <form method="post" action="{{route('save.declaration')}}" enctype="multipart/form-data">

        <div class=form-group>    
            <label for="A">A :</label>
            <input type="email" id="A" class="form-control" name="A" placeholder="Entrez l'adresse email du professeur ici" required><br><br>
        </div>  
        
        <div class=form-group>    
            <label for="description">Description :</label>
            <textarea type="text" id="description" class="form-control" name="description" placeholder="Message" required>
            </textarea>
        </div>  

        <div class=form-group>
            <label for="date_absence">Date d'absence :</label>
            <input type="date" id="date_absence" class="form-control" name="date_absence" required><br><br>
        </div>   
        <div class=form-group>
                <label for="justificatif">Justificatif :</label>
                <input type="file" id="justificatif" class="form-control" name="justificatif"><br><br>
        </div>     
        
        <div class=form-group>
            <input type="submit" class="btn btn-success btn-lg" value="Soumettre">
        </div>    
        </form>
    </div>   
</body>
</html>