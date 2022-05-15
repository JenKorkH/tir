<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GunsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'type' => ['required'],
        'caliber' => ['required'],
        'clip' => ['required'],
        'weight_bullet' => ['required'],
        'weight_wo_bullet' => ['required'],
        'length' => ['required'],
        'width' => ['required'],
        'height' => ['required'],
        'barrel_length' => ['required'],
        'barrel_cutting' => ['required'],
        'about' => ['required'],
        ];
    }
}
