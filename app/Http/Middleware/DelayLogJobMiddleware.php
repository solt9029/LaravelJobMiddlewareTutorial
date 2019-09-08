<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class DelayLogJobMiddleware
{
    /**
     * Process the queued job.
     *
     * @param  mixed  $job
     * @param  callable  $next
     * @return mixed
     */
    public function handle($job, Closure $next)
    {
        Log::info('DelayLogJobMiddleware handled');
        return $next($job);
    }
}
