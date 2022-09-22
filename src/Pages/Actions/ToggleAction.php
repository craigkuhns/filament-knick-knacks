<?php

namespace Kraghammer\FilamentKnickKnacks\Pages\Actions;

use Filament\Pages\Actions\Action;
use Filament\Pages\Actions\Concerns\HasId;
use Kraghammer\FilamentKnickKnacks\Pages\Actions\Concerns\HasToggleColors;
use Kraghammer\FilamentKnickKnacks\Pages\Actions\Concerns\HasToggleIcons;

class ToggleAction extends Action
{
    use HasId, HasToggleColors, HasToggleIcons;

    protected function setUp(): void
    {
        parent::setUp();

        $this->view('filament-knick-knacks::pages.actions.toggle-action');
    }
}
