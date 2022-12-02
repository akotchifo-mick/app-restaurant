<div>
    @auth
    @if (session()->has('successMessage'))
    <div class="toast show position-fixed bottom-0 end-0 bg-success" role="alert" aria-live="polite" aria-atomic="true">
        <div role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('successMessage') }}
            </div>
        </div>
    </div>
    @elseif (session()->has('duplicateTicket'))
    <div class="toast fade show position-fixed bottom-0 end-0 bg-danger ">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('duplicateTicket') }}
        </div>
    </div>
    @elseif (session()->has('ticketZero'))
    <div class="toast fade show position-fixed bottom-0 end-0 bg-warning">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-globe"></i> Un nouveau message cher étudiant</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('ticketZero') }}
        </div>
    </div>
    @endif
    @endauth

    {{-- The Master doesn't talk, he acts. --}}
    <div>

        <form>
            @csrf
            <h2 class="section-title ">@lang('Book-Table')</h2>
            @if ($errors->any())
            <div class="alert alert-dismissible alert-danger fade show" role="alert">
                Veuiller remplir tous les champs et réessayer !!
            </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-4 col-md-4 col-xs-2 my-2"></div>
                <div class="col-sm-2 col-md-2 col-xs-4 my-2">
                    <select name="meal" class="form-control form-control-lg custom-form-control" wire:model='meal'>
                        <option hidden>Choisir le repas</option>
                        <option value="breakfast">@lang('Breakfast')</option>
                        <option value="lunch">@lang('Lunch')</option>
                        <option value="dinner">@lang('Dinner')</option>
                    </select>
                </div>
                <div class="col-sm-2 col-md-2 col-xs-2 my-2">
                    <input type="number" class="form-control form-control-lg custom-form-control"
                        placeholder="Nombre de plats" max="5" min="1" wire:model='orders' name="orders">
                </div>
                <div class="col-sm-4 col-md-4 col-xs-2 my-2"></div>
            </div>
            @auth
            <div class="mt-3 d-grid gap-2 col-3 mx-auto">
                <button wire:click.prevent="create" class=" btn btn-primary">@lang('Get Ticket')</button>
            </div>
            @endauth
            @guest
            <div class="mt-3 gap-2 mx-auto">
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                    data-bs-content="@lang('You shall log in first')">
                    <button class="btn btn-lg btn-primary" type="button" disabled>@lang('Get Ticket')</button>
                </span>
            </div>
            @endguest

        </form>
    </div>
</div>