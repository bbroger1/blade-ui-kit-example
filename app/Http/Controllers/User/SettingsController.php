<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Validation\ValidatesRequests;

final class SettingsController
{
    use ValidatesRequests;

    public function show()
    {
        return view('user.settings');
    }

    public function update()
    {
        session()->flash('status', 'User settings saved successfully.');

        return redirect()->route('user.settings');
    }
}
