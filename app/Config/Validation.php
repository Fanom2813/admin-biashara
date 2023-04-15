<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $signup = [
        'fullname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'You must enter your full name.',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'You must enter your email.',
                'valid_email' => 'Please check the Email field. It does not appear to be valid.',
            ],
        ],
        'password' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'You must provide a password.',
            ],
        ],
        'confirm-password' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'You must confirm your password.',
                'matches[password]' => 'Your password do not match.'
            ],
        ],
    ];

}