<div>
  {{-- In work, do what you enjoy. --}}
   <div class="modal fade" id="userData" tabindex="-1" role="dialog" aria-labelledby="userData" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userData">{{ $user->lastName.' '.$user->firstName }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row col justify-content-center">
            <span class="h1 text-olive text-center"> Profil
              <hr class="style">
            </span>
          </div>
          <div class="h5 row row-cols-2 justify-content-center">
            <div class="col"> N° Matricule </div>
            <div class="col"> {{ $user->cardId }} </div>
            <div class="col"> Adresse mail </div>
            <div class="col"> {{ $user->email }} </div>
            <div class="col"> Date de validation </div>
            <div class="col"> {{ $user->email_verified_at }} </div>
            </span>
          </div>
          <hr>
          <div class="row col justify-content-center">
            <span class="h1 text-olive text-center"> Statistiques
              <hr class="style">
            </span>
          </div>
          <div class="justify-content-left h4 row row-cols-2">
            <div class="col"> Date du premier ticket </div>
            <div class="col"> {{date('Y-m-d')}} </div>
            <div class="col"> Total de tickets </div>
            <div class="col"> 20 </div>
            <div class="col"> Moyenne de tickets </div>
            <div class="col"> 3 tickets par semaine </div>
            </span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>