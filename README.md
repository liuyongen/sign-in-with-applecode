# Apple login with code

## Install
```json
{
    "require": {
        "boyaa/sign_in_with_apple_code": "1.0.0"
    }
}
```

## Example

```php
<?php
	require('vendor/autoload.php');
	use AppleSignIn\AppleAuth;

	# Save your private key from Apple in a file called `key.txt`
	$key = '' ;

	# Your 10-character Team ID
	$teamId = '';

	# Your Services ID, e.g. com.aaronparecki.services
	$clientId = '';

	# Find the 10-char Key ID value from the portal
	$keyId = '';

	$clientSecret = AppleAuth::createClientSecret($teamId, $clientId, $key, $keyId);
	var_dump($clientSecret);
```
