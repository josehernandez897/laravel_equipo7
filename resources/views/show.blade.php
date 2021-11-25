@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectoG.index') }}">Rgeresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria al que pertenece:</strong>
                            {{ $proyecto->tblcategorium->nombre_c }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del proyecto:</strong>
                            {{ $proyecto->nombrepry }}
                        </div>
                        <div class="form-group">
                            <strong>Historia del proyecto:</strong>
                            {{ $proyecto->descripcion }}
                        </div>
                         
                        <div class="form-group">
                            <strong>cantidad solicitada:</strong>
                            ${{ $proyecto->Cantidad }}
                        </div>
                        <div class="form-group">
                            <img class="img-fluid" src="{{asset('storage').'/'.$proyecto->imgpry }}" alt="" />

                        </div>

                    </div>
                     
                    <div class="float-left">
                            <span class="card-title">Apoyar el proyecto</span>
                        </div>
                    <div class="float-right">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}"></script>
    
            <script>
                paypal.Buttons({

                    // Sets up the transaction when a payment button is clicked
                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: '77.44' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                                }
                            }]
                        });
                    },

                    // Finalize the transaction after payer approval
                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(orderData) {
                            // Successful capture! For dev/demo purposes:
                            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                            var transaction = orderData.purchase_units[0].payments.captures[0];
                            alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                            // When ready to go live, remove the alert and show a success message within this page. For example:
                            // var element = document.getElementById('paypal-button-container');
                            // element.innerHTML = '';
                            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                            // Or go to another URL:  actions.redirect('thank_you.html');
                        });
                    }
                }).render('#paypal-button-container');
            </script>

@endsection
