<?php

return [
    /*
     * Enable or disable captchas
     */
    'enabled' => env('RECAPTCHA_ENABLED', false),

    /*
     * API endpoint for recaptcha checks. You should not edit this.
     */
    'domain' => env('RECAPTCHA_DOMAIN', 'https://challenges.cloudflare.com/turnstile/v0/siteverify'),

    /*
     * Use a custom secret key, we use our public one by default
     */
    'secret_key' => env('RECAPTCHA_SECRET_KEY', 'ChangeMe'),
    '_shipped_secret_key' => 'ChangeMe',

    /*
     * Use a custom website key, we use our public one by default
     */
    'website_key' => env('RECAPTCHA_WEBSITE_KEY', 'ChangeMe'),
    '_shipped_website_key' => 'ChangeMe',

    /*
     * Domain verification is enabled by default and compares the domain used when solving the captcha
     * as public keys can't have domain verification on google's side enabled (obviously).
     */
    'verify_domain' => true,
];
