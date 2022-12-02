<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if(session()->has('zeroSet'))
    <div class="toast fade show position fixed bg-warning" data-bs-delay="5000ms">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-globe"></i> Ticket Zero a déjà été enregistré</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('zeroSet') }}
        </div>
    </div>
    
    @else 
    <div class="card">
        <div class="card-header bg-gradient-danger h4">
            Lancer le ticket ZERO
        </div>
        <div class="card-body bg-white">
            <div class="btn btn-outline-info" wire:click='create'>Launch ticket zero</div>
        </div>
        <div class="card-footer bg-gradient-success">
            Lancer le ticket ZERO
        </div>
    </div>
    @endif
   
</div>
