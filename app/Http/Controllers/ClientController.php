<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($client)
    {
        return $client;
        // Check in the database if this $client (subdomain) has been registered.
        // Clients must pay to access this page. Each subdomain represent a paying client.

        // If the subdomain exists and it is registered then we take them to their log in page.
        // The client log in page is where they access their page.
        // But we should already start retrieving their information
        // - Company name
        // - Company logo
        // - Company customized sign in box

        // If the subdomain doesn't exist we show something funny.
        // Haha.. Why life is so complicated... Break a computer or something.

        //
    }
}
