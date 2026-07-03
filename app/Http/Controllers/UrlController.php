<?php
namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\UrlLog;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UrlController extends Controller
{
    /**
     * Show the user's password settings page.
     */
    public function redirect(Request $request, $short): \Illuminate\Http\RedirectResponse
    {
        $url = Url::query()->where('short', $short)->firstOrFail();

        UrlLog::query()->create([
            'url_id' => $url->id,
            'ip' => $request->ip()
        ]);

        return redirect()->away($url->url);

    }
}
