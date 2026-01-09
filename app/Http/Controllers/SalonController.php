<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salon;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class SalonController extends Controller
{
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:salons,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'required|string',
            'services' => 'required|array', // تأكد إن فيه خدمات
            'services.*.name' => 'required|string|max:255', // كل خدمة لازم يكون لها اسم
        ]);

       
        DB::beginTransaction();

        try {
            
            $salon = Salon::create($request->only('name', 'email', 'phone', 'address'));

         
            foreach ($request->services as $serviceData) {
                $salon->services()->create([
                    'name' => $serviceData['name']
                ]);
            }

         
            DB::commit();

            return redirect()->back()->with('success', 'Salon and services created successfully!');

        } catch (\Exception $e) {
           
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
