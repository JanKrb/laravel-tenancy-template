<?php

namespace App\Http\Requests;

use App\Http\Services\ResponseService;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest as Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $this->validator->errors();

        throw new HttpResponseException(
            ResponseService::sendResponse(
                payload: (array) $errors,
                feedbackMessage: __('validation.failed'),
                httpCode: 422
            )
        );
    }
}
