<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Livewire\WithPagination;

class OrderIndex extends Component
{
    use WithPagination;

    public $showOrderDetailModal = false;

    public $orderItems;
    public $code;
    public $orderId;
    public $order_status;
    public $order_date;
    public $payment_due;
    public $payment_status;
    public $payment_token;
    public $payment_url;
    public $base_total_price;
    public $tax_amount;
    public $tax_percent;
    public $discount_amount;
    public $discount_percent;
    public $shipping_cost;
    public $grand_total;
    public $note;
    public $customer_first_name;
    public $customer_last_name;
    public $customer_address1;
    public $customer_address2;
    public $customer_phone;
    public $customer_email;
    public $customer_city_id;
    public $customer_province_id;
    public $customer_postcode;
    
    public $shipment_first_name;
    public $shipment_last_name;
    public $shipment_address1;
    public $shipment_address2;
    public $shipment_phone;
    public $shipment_email;
    public $shipment_postcode;

    public $shipping_courier;
    public $shipping_service_name;
    public $approved_by;
    public $approved_at;
    public $cancelled_by;
    public $cancelled_at;
    public $cancellation_note;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public function showDetailModal($orderId = '')
    {
        // $this->reset(['title']);
        // $this->orderId = $orderId;
        // $order = Order::find($this->orderId);
        // $this->code = $order->code;
        // Billing address
        // $this->customer_first_name = $order->customer_first_name;
        // $this->customer_last_name = $order->customer_last_name;
        // $this->customer_address1 = $order->customer_address1;
        // $this->customer_address2 = $order->customer_address2;
        // $this->customer_email = $order->customer_email;
        // $this->customer_phone = $order->customer_phone;
        // $this->customer_postcode = $order->customer_postcode;
        // Shipment address
        // $this->shipment_first_name = $order->shipment->first_name;
        // $this->shipment_last_name = $order->shipment->last_name;
        // $this->shipment_address1 = $order->shipment->address1;
        // $this->shipment_address2 = $order->shipment->address2;
        // $this->shipment_phone = $order->shipment->phone;
        // $this->shipment_email = $order->shipment->email;
        // $this->shipment_postcode = $order->shipment->postcode;
        // Detail
        // $this->order_date = $order->order_date;
        // $this->order_status = $order->order_status;
        // $this->cancelled_at = $order->cancelled_at;
        // $this->cancellation_note = $order->cancellation_note;
        // $this->shipping_service_name = $order->shipping_service_name;
        // $this->payment_status = $order->payment_status;

        // $this->base_total_price = $order->base_total_price;
        // $this->tax_amount = $order->tax_amount;
        // $this->shipping_cost = $order->shipping_cost;
        // $this->grand_total = $order->grand_total;

        // $this->orderItems = $order->orderItems;

        $this->showOrderDetailModal = true;
    }
    
    public function closeDetailModal()
    {
        $this->showOrderDetailModal = false;
    }

    public function render()
    {
       
        return view('livewire.order-index', [
            'orders' => Order::orderBy('created_at', 'DESC')->paginate($this->perPage),
        ] );
    }
}
