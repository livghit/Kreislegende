<?php

use App\Livewire\Teams\UpdateTeamLogo;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(UpdateTeamLogo::class)
        ->assertStatus(200);
});
