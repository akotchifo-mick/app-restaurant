<div>
   
    {{-- The Master doesn't talk, he acts. --}}
    <div>

        <form wire:submit.prevent="create">
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
                <button type="submit" class=" btn btn-primary" >
                @lang('Get Ticket')
                </button>
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