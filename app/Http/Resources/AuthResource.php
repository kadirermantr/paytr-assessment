<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'token' => $this->createToken('login')->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(Carbon::now()->addWeek())->toDateTimeString(),
            'success' => 'Successfully logged in',
        ];
    }
}
