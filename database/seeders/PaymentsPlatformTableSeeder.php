<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentsPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // If we want, we can shove these processes off to a factory, but right now, we don't need one for this simple implementation.
        PaymentPlatform::create([
            'name' => 'Paypal',
            'image' => 'img/payment-platforms/paypal.jpg',
        ]);

        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'img/payment-platforms/stripe.jpg',
        ]);
    }
}
