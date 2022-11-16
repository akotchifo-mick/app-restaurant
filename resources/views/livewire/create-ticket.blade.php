<div>
    <form class="" action="{{route('prudo')}}" method="POST">
        @csrf
        <h2 class="section-title ">@lang('Book-Table')</h2>
        <div class="row mb-2">
            <div class="col-sm-4 col-md-4 col-xs-2 my-2"></div>
            <div class="col-sm-2 col-md-2 col-xs-4 my-2">
                <select name="meal" id="meal" class="form-control form-control-lg custom-form-control">
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                </select>
            </div>
            <div class="col-sm-2 col-md-2 col-xs-4 my-2">
                <input type="number" id="orders" class="form-control form-control-lg custom-form-control" required
                    placeholder="Plats" max="5" min="1">
            </div>
            <div class="col-sm-4 col-md-4 col-xs-2 my-2"></div>
        </div>
        @auth
        <div class="mt-3 d-grid gap-2 col-3 mx-auto">
            <button class=" btn btn-primary">@lang('Get Ticket')</button>
        </div>
        @endauth
        @guest
        <div class="mt-3 d-grid gap-2 col-3 mx-auto">
            <button id="disabledBtn" disabled>@lang('Get Ticket')</button>
            <div id="hiddenSubmit" class="alert alert-danger">@lang('You shall log in first') </div>
        </div>
        <div class="mt-3 d-grid gap-2 col-3 mx-auto">
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" 
            data-bs-content="Disabled popover">
                <button class="btn btn-primary" type="button" disabled>Disabled button</button>
              </span>
        </div>
        
        @endguest        
    </form>
</div>