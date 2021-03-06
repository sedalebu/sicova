<?php

namespace sicova\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaFormRequest extends FormRequest
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
     *Establece las reglas de validacion de los datos.
     * @return array
     */
    public function rules()
    {
        return [
            'programa'=>'required|max:45',
            'descripcion'=>'max:200',
            'estado'=>'required',

        ];
    }
}
