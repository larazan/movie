<?php

namespace App\Http\Livewire;

use App\Models\Shipment;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShipmentIndex extends Component
{
    use WithPagination; 

    public $showShipmentModal = false;
    public $showShipmentDetailModal = false;

    public $firstName;
    public $lastName;
    public $company;
    public $address1;
    public $address2;
    public $provinceId;
    public $cityId;
    public $postcode;
    public $phone;
    public $email;
    public $totalQty;
    public $totalWeight;
    public $provinces;
    public $shipmentId;
    public $trackNumber;
    public $shippedAt;
    public $shippedBy;
    
    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    protected $rules = [
        'track_number' => 'required|max:255',
    ];

    public function showCreateModal()
    {
        $this->showShipmentModal = true;
    }

    public function showEditModal($shipmentId)
    {
        $this->reset(['title']);
        $this->shipmentId = $shipmentId;
        $shipment = Shipment::findOrFail($shipmentId);
        $this->firstName = $shipment->first_name;
        $this->lastName = $shipment->last_name;
        $this->company = $shipment->company;
        $this->address1 = $shipment->address1;
        $this->address2 = $shipment->address2;
        $this->provinceId = $shipment->province_id;
        $this->cityId = $shipment->city_id;
        $this->postcode = $shipment->postcode;
        $this->phone = $shipment->phone;
        $this->email = $shipment->email;
        $this->totalQty = $shipment->total_qty;
        $this->totalWeight = $shipment->total_weight;
        $this->trackNumber = $shipment->track_number;
        
        $this->showShipmentModal = true;
    }
    
    public function updateShipment()
    {
        $shipment = Shipment::findOrFail($this->shipmentId);
        $this->validate();
  
        
        if ($this->shipmentId) {
            if ($shipment) {

                $shipment->update([
                    'first_name' => $this->firstName,
                    'last_name' => $this->lastName,
                    'company' => $this->company,
                    'address1' => $this->address1,
                    'address2' => $this->address2,
                    'province_id' => $this->provinceId,
                    'city_id' => $this->cityId,
                    'postcode' => $this->postcode,
                    'phone' => $this->phone,
                    'email' => $this->email,
                    'total_qty' => $this->totalQty,
                    'total_weight' => $this->totalWeight,
                    'track_number' => $this->trackNumber,
                    'shipped_at' => Carbon::now(),
                    'shipped_by' => Auth::user()->id,
                   
                    'status' => Shipment::SHIPPED,
                ]);
                // $this->_sendEmailShipmentShipped($shipment->order);
            }
        }

        $this->reset();
        $this->showShipmentModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'The shipment has been updated']);
    }

    public function closeShipmentModal()
    {
        $this->showShipmentModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

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

        $this->showShipmentDetailModal = true;
    }

    public function closeDetailModal()
    {
        $this->showShipmentDetailModal = false;
    }

    public function render()
    {
        $shipments = Shipment::join('orders', 'shipments.order_id', '=', 'orders.id')
			->whereRaw('orders.deleted_at IS NULL')
			->orderBy('shipments.created_at', 'DESC')->paginate($this->perPage);

        return view('livewire.shipment-index', [
            'shipments' => $shipments
        ]);
    }
}
