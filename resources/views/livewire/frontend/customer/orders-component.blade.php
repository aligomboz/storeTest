<div x-data="{ showOrder: @entangle('showOrder') }">
    <div class="d-flex">
        <h2 class="h5 text-uppercase mb-4">{{ __('Orders') }}</h2>
    </div>

    @if ($orders)
        <div class="my-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('Order Ref') }}.</th>
                            <th>{{ __('Total') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th class="col-2">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd($orders) }} --}}
                        {{-- @foreach ($orders as $item) --}}
                        
                        {{-- {{ dd($item) }} --}}
                    {{-- @endforeach  --}}
                       @forelse($orders as  $order)
                        <tr wire:key="{{ $order->id }}">
                            <td>{{ $order->ref_id }}</td>
                            <td>{{ $order->currency() . ' ' . $order->total }}</td>
                            <td>{!! $order->statusWithLabel() !!}</td>
                            <td>{{ $order->created_at->format('d-m-Y') }}</td>
                            <td class="text-right">
                                <button type="button" wire:click="displayOrder('{{ $order->id }}')"
                                    x-on:click="showOrder = true" class="btn btn-success btn-sm">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="text-center">{{ __('No orders found.') }}</p>
                            </td>
                        </tr>
                    @endforelse 

                        {{-- @forelse ($products as $item)
                            @foreach ($item->products as $product)
                                <tr>

                                    <td>{{ $product->name }}</td>
                                    <td>{{ $item->currency() . ' ' . number_format($product->price, 2) }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td>{{ $item->currency() . ' ' . number_format($product->price * $product->pivot->quantity, 2) }}
                                    </td>


                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-right"><strong>Subtotal</strong></td>
                                <td>{{ $item->currency() . ' ' . number_format($item->subtotal, 2) }}</td>
                            </tr>
                            @if (!is_null($item->discount_code))
                                <tr>
                                    <td colspan="3" class="text-right"><strong>Discount
                                            (<small>{{ $item->discount_code }}</small>)</strong></td>
                                    <td>{{ $item->currency() . ' ' . number_format($item->discount, 2) }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td colspan="3" class="text-right"><strong>Tax</strong></td>
                                <td>{{ $item->currency() . ' ' . number_format($item->tax, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Shipping</strong></td>
                                <td>{{ $item->currency() . ' ' . number_format($item->shipping, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Amount</strong></td>
                                <td>{{ $item->currency() . ' ' . number_format($item->total, 2) }}</td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="5">
                                    <p class="text-center">{{ __('No orders found.') }}</p>
                                </td>
                            </tr>
                        @endforelse --}}
                    </tbody>
                </table>
            </div>

            <div x-show="showOrder" x-on:click.away="showOrder = false" class="border rounded shadow p-4">
                <div class="table-responsive mb-4">
                    <table class="table">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0" scope="col"><strong
                                        class="text-small text-uppercase">{{ __('Product') }}</strong></th>
                                <th class="border-0" scope="col"><strong
                                        class="text-small text-uppercase">{{ __('Price') }}</strong></th>
                                <th class="border-0" scope="col"><strong
                                        class="text-small text-uppercase">{{ __('Quantity') }}</strong></th>
                                <th class="border-0" scope="col"><strong
                                        class="text-small text-uppercase">{{ __('Total') }}</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $order->currency() . ' ' . number_format($product->price, 2) }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td>{{ $order->currency() . ' ' . number_format($product->price * $product->pivot->quantity, 2) }}
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="3" class="text-right"><strong>{{ __('Subtotal') }}</strong></td>
                                <td>{{ $order->currency() . ' ' . number_format($order->subtotal, 2) }}</td>
                            </tr>
                            @if (!is_null($order->discount_code))
                                <tr>
                                    <td colspan="3" class="text-right"><strong>{{ __('Discount') }}
                                            (<small>{{ $order->discount_code }}</small>)</strong></td>
                                    <td>{{ $order->currency() . ' ' . number_format($order->discount, 2) }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td colspan="3" class="text-right"><strong>{{ __('Tax') }}</strong></td>
                                <td>{{ $order->currency() . ' ' . number_format($order->tax, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>{{ __('Shipping') }}</strong></td>
                                <td>{{ $order->currency() . ' ' . number_format($order->shipping, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>{{ __('Amount') }}</strong></td>
                                <td>{{ $order->currency() . ' ' . number_format($order->total, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="h5 text-uppercase">{{ __('Transactions') }}</h2>
                <div class="table-responsive mb-4">
                    <table class="table">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0" scope="col"><strong
                                        class="text-small text-uppercase">{{ __('Transaction') }}</strong></th>
                                <th class="border-0" scope="col"><strong
                                        class="text-small text-uppercase">{{ __('Date') }}</strong></th>
                                {{-- <th class="border-0" scope="co/l"><strong class="text-small text-uppercase">Days</strong></th> --}}
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->status($transaction->transaction) }}</td>
                                    <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                                    {{-- <td>{{ \Carbon\Carbon::now()->addDays(5)->diffInDays($transaction->created_at->format('Y-m-d')) }}</td> --}}
                                    <td>
                                        @if ($loop->last &&
                                            $transaction->transaction == \App\Models\OrderTransaction::FINISHED &&
                                            \Carbon\Carbon::now()->addDays(5)->diffInDays($transaction->created_at->format('Y-m-d')) != 0)
                                            <button type="button"
                                                wire:click="requestReturnOrder('{{ $order->id }}')"
                                                class="btn btn-link text-right"> {{ __('you can return order in') }}
                                                {{ 5 - $transaction->created_at->diffInDays() }} {{ __('days') }}
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endif

</div>
