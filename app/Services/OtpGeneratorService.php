<?php

namespace App\Services;

use App\Traits\HandleResponse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class OtpGeneratorService
{
    use HandleResponse;

    public function generate($user)
    {
        return DB::transaction(function () use ($user) {
            $otp = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT); // Generate a random 4-digit OTP
            $user->otp = Hash::make($otp);
            $user->otp_expires_at = Carbon::now()->addMinutes(60); // Set expiration time (60 minutes)
            $user->save();
            return $otp;
        });
    }
}
