<div>
    {{-- In work, do what you enjoy. --}}
    <div class="form-group">
        <div class="input-group input-group-lg">
            <input type="search" class="form-control form-control-lg" placeholder="Rechercher un membre"
                wire:model.debounce.500ms="search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <table class="table is-fullwidth has-text-grey">
        <thead>
            <tr>
                <th scope="col" wire:click="setOrderField('cardId')">Matricule</th>
                <th scope="col" wire:click="setOrderField('lastName')">Nom & Prénom (s)</th>
                <th scope="col" wire:click="setOrderField('email')">Adresse Mail</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allStudents as $user )
            <tr>
                <th scope="raw">
                    <span>{{ $user->cardId }}</span>
                </th>
                <td>
                    <img class="img-sm rounded-pill"
                        src="https://eu.ui-avatars.com/api/?name={{$user->lastName . ' '. $user->firstName}}&background=random">
                    <span class="text-lg pl-2">
                        {{$user->lastName . ' '. $user->firstName}}
                    </span>
                </td>
                <td class="pt-3">
                    <span class="text-lg">
                        {{ $user->email }}
                    </span>
                </td>
                <td>
                    <button class="button" data-toggle="modal" data-target="#userData"
                        wire:click="setUser ({{ $user->id }}) "> Détails </button>
                </td>
            </tr>
            @if ( $user->id == $getUserId)
                <livewire:user-details :user=" $user " />
            @endif


            @endforeach
        </tbody>
    </table>

    {{ $allStudents->links() }}
</div>