<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => fn() => $request->user(),
            ],
            'flash' => [
                'success' => fn() => session('success'),
                'error' => fn() => session('error'),
            ],
        ]);
    }
}
