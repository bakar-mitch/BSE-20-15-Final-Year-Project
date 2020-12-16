<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;


class InvoiceController extends Controller
{
    //
    public function index(){
        $customer = new Buyer([
            'name'          => 'John Doe',
            'custom_fields' => [
                'email' => 'test@example.com',
                'Ticket_id'        => '12345678A',
            ],
        ]);

        $item = (new InvoiceItem())->title('Ticket one')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->dateFormat('m/d/Y')
            ->currencySymbol('$')
            ->currencyCode('USD')
            ->discountByPercent(10)
            //->logo(public_path('vendor/invoices/SamplePNGImage_100kbmb.png'))
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);

        //$link = $invoice->url();

        return $invoice->stream();
    }
    
}
