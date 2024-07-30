<?php

namespace App\Livewire\Teams;

use App\Models\Team;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UpdateTeamLogo extends Component
{
    public Team $team;

    #[Validate('required|url')]
    public string $logo_url;

    public function updateTeamLogo()
    {
        $this->validate();

        $this->team->update(['logo' => $this->logo_url]);

        return redirect()->back()->with('status', 'Logo updated , to see the new logo refresh the page!');
    }

    public function render()
    {
        return view('livewire.teams.update-team-logo');
    }
}
