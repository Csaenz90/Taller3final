<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Minuscula implements Rule
{
    
    public function passes($attribute, $value)
    {
      return strtolower($value) === $value;
    }

    
    public function message()
    {
        return 'Este campo debe estar en minuscula';
    }
}
