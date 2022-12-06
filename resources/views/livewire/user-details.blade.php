<div>

  {{-- In work, do what you enjoy. --}}
  <div class="modal" id="userData" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="userData"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title " >{{ $user->lastName.' '.$user->firstName }}
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" wire:click='closed'>&times;</span>
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

            <div class="col"> Premier ticket </div>
            <div class="col"> {{ $user->ticketFirst( $user )->date }} </div>
            <div class="col"> Total de tickets </div>
            <div class="col"> size </div>
            <div class="col"> Moyenne de tickets </div>
            <div class="col"> 3 tickets par semaine </div>
            <div class="col"> Tickets en cours </div>
            <div class="col d-flex-inline"> 
              <input type="checkbox" name="Breakfast" id="Breakfast" value="Breakfast"> 
              <label for="Breakfast"> Breakfast </label> 
              <input type="checkbox" name="Lunch" id="Lunch" value="Lunch"> 
              <label for="Lunch"> Lunch </label> 
              <input type="checkbox" name="Dinner" id="Dinner" value="Dinner"> 
              <label for="Dinner"> Dinner </label> 
            </div>
            </span>
          </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click='closed'>Close</button>
        </div>
      </div>
    </div>
  </div>

</div>