<?php

namespace App\Modules\QrCode\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("QrCode::welcome");
    }
}
