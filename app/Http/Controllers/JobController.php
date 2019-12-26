<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendRegistrationEmail;

class JobController extends Controller
{
	public $tries = 3;

    /**
     * Handle Queue Process
     */
    public function processQueue()
    {
    	$emailJob = new SendRegistrationEmail();
		dispatch($emailJob);
    }

}
