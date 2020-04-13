<?php

namespace AppleSignIn;

class AppleAuth
{
    public static function createClientSecret($teamId, $clientId, $key, $keyId)
    {

        $header = ["kid" => $keyId];
        $time = time();
        $payload = [
            "iss" => $teamId,
            "iat" => $time,
            "exp" => $time + 86400 * 180,
            "aud" => "https://appleid.apple.com",
            "sub" => $clientId,
        ];
        return JWT::encode($payload, $key, "ES256", null, $header);
    }
}
