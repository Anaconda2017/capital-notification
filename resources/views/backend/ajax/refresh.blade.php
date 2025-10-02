<table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>

                                            <th>
                                                User Name
                                            </th>
                                            <th>
                                                Date / Time
                                            </th>

                                            <th>
                                                Government
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Phone
                                            </th>
                                            <th>
                                                Comment
                                            </th>
                                            <th>
                                                Quantity
                                            </th>
                                            <th>
                                                Product Price
                                            </th>
                                            <th>
                                                Product Name
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rows as $order)
                                                @foreach($order->order_details as $order_detail)
                                            <tr>
                                                <td>
                                                    {{ $order->id }}
                                                </td>
                                                <td>
                                                    {{ $order->user->name }}
                                                </td>
                                                
                                                <td>{{ $order->updated_at }}</td>
                                                @foreach($checkoutRows as $checkoutRow)
                                                @if($checkoutRow->order_id == $order->id)
                                                    <td class="text-bold-500">
                                                        {{ $checkoutRow->address->government }}
                                                    </td>
                                                    <td>
                                                        {{ $checkoutRow->address->address }}
                                                    </td>
                                                @endif
                                                @endforeach
                                                
                                                <td>
                                                    {{ $order->user_phone }}
                                                </td>
                                                
                                                <td>
                                                    {{ $order->comment }}
                                                </td>
                                                
                                                 <td>{{ $order_detail->quantity }}</td>

                                                <td class="text-bold-500">
                                                    {{ $order_detail->price }}
                                                </td>
                                                <td>
                                                    {{ $order_detail->product->en_name }}
                                                </td>


                                        </tr>
                                                @endforeach
                                        <!--<td class="d-flex align-items-center no-gutters">-->
                                        <!--    <a href="{{ route('orders.show', $order->id) }}" title=""-->
                                        <!--        class="btn btn-primary" type="button" data-original-title="Show Order"-->
                                        <!--        rel="tooltip">-->
                                        <!--        <i-->
                                        <!--            class="badge-circle badge-circle-primary fa fa-search-plus font-medium-1"></i>-->
                                        <!--    </a>-->
                                        <!--    @if ($order->status == 'submitted')-->
                                        <!--        <a class="btn btn-success" href="{{ route('ordersUpdateStatus', [$order->id, 'confirmed']) }}"-->
                                        <!--            title="" class="btn btn-sucess" type="button"-->
                                        <!--            data-original-title="confirmed" rel="tooltip">-->
                                        <!--            <i-->
                                        <!--                class="badge-circle badge-circle-success fa fa-check font-medium-1"></i>-->
                                        <!--        </a>-->
                                        <!--    @elseif($order->status == 'confirmed')-->
                                        <!--        <a href="{{ route('ordersUpdateStatus', [$order->id, 'on_the_way']) }}"-->
                                        <!--            title="" class="btn btn-info" type="button"-->
                                        <!--            data-original-title="on the way" rel="tooltip">-->
                                        <!--            <i-->
                                        <!--                class="badge-circle badge-circle-dark fa fa-biking font-medium-1"></i>-->
                                        <!--        </a>-->
                                        <!--    @elseif($order->status == 'on_the_way')-->
                                        <!--        <a href="{{ route('ordersUpdateStatus', [$order->id, 'delivered']) }}"-->
                                        <!--            title="" class="btn btn-warning" type="button"-->
                                        <!--            data-original-title="delivered" rel="tooltip">-->
                                        <!--            <i-->
                                        <!--                class="badge-circle badge-circle-info fa fa-luggage-cart font-medium-1"></i>-->
                                        <!--        </a>-->
                                        <!--    @endif-->
                                        <!--    @if ($order->status !== 'delivered')-->
                                        <!--        @if ($order->status !== 'cancelled')-->
                                        <!--            <form action="{{ route('orders.destroy', $order->id) }}"-->
                                        <!--                method="POST">-->
                                        <!--                {{ csrf_field() }}-->
                                        <!--                {{ method_field('delete') }}-->
                                        <!--                <button title="" class="btn btn-danger" type="submit"-->
                                        <!--                    data-original-title="Cancel Order" rel="tooltip"-->
                                        <!--                    onclick="return confirm('Are you sure you want to cancel this item?');">-->
                                        <!--                    <i-->
                                        <!--                        class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i>-->
                                        <!--                </button>-->
                                        <!--            </form>-->
                                        <!--        @endif-->
                                        <!--    @endif-->

                                        <!--</td>-->


                                        </tr>
                            @endforeach
                            </tbody>
                            </table>