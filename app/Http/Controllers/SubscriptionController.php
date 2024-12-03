<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriptionRequest;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriptionRequest $request)
    {
        $validatedData = $request->validated();

        $subscription = Subscription::create([
            'email' => $validatedData['email'],
        ]);

        return redirect()->back();

    }
}
