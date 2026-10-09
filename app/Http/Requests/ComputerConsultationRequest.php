<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerConsultationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email'],
            'budget'   => ['required', 'numeric', 'min:5000'],
            'message'  => ['required', 'string', 'min:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Вкажіть ваше ім\'я.',
            'email.required'   => 'Вкажіть ваш Email.',
            'email.email'      => 'Введіть коректну адресу пошти.',
            'budget.required'  => 'Вкажіть ваш орієнтовний бюджет.',
            'budget.numeric'   => 'Бюджет має бути числом.',
            'budget.min'       => 'Бюджет повинен бути не менше 5000 грн.',
            'message.required' => 'Опишіть ваші вимоги до ПК (для ігор, роботи тощо).',
            'message.min'      => 'Повідомлення має містити щонайменше 10 символів.',
        ];
    }
}
