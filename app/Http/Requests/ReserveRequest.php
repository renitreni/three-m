<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "appoint_date" => 'required|date',
            "name"         => 'required',
            "car_model"    => 'required',
            "branch"       => 'required',
            "service"      => 'required',
            "email"        => 'required|email',
            "contact_no"   => 'required',
            "remarks"      => 'required',
        ];
    }
}
