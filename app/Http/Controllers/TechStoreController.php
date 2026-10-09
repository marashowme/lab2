<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComputerConsultationRequest;

class TechStoreController extends Controller
{
    public function landing()
    {
        // Передаємо щонайменше одне значення (наприклад, актуальні акційні комплектуючі або спецпропозицію)
        $promoMessage = "Отримай знижку 10% на збірку ігрового ПК цього місяця!";
        $categories = ['Ігрові ПК', 'Офісні ПК', 'Ноутбуки', 'Комплектуючі'];

        return view('store.landing', compact('promoMessage', 'categories'));
    }

    public function storeConsultation(ComputerConsultationRequest $request)
    {
        // Повертаємо підтвердження з валідованими даними
        return view('store.confirm', $request->validated());
    }
}
