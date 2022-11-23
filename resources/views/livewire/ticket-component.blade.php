<div>
    {{-- Stop trying to control. --}}

    @auth
    @foreach ( $tickets as $ticket )
    <div class="card bg-primary ">
        <div class="card-header d-flex justify-content-around">
            <h4 class="brand-txt"> Restau-U </h4>
            <h4> {{$ticket->meal}} </h4>
        </div>
        <div class="card-body">
            <div class="text-center h1"> {{Auth::user()->cardId}} </div>
            <table class="table table-borderless">
                <tr class="h2">
                    <td class="text-center "> {{$ticket->id}} </td>
                    <td class="text-center"> {{$ticket->orders}} Plat </td>
                </tr>
            </table>
        </div>
        <div class="card-footer text-center"> Plus simple & plus efficace </div>
    </div>
    @endforeach
    @endauth
    
</div>
