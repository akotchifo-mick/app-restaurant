<th wire:click="setOrderField('{{ $name }}')">
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    {{ $slot }}
    @if ( $visible )
        @if ( $direction == 'ASC')
        <ion-icon name="caret-up-outline"></ion-icon>
        @else
        <ion-icon name="caret-down-outline"></ion-icon>
        @endif
    @endif
</th>