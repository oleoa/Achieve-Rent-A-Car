@extends('layout')
@php $title = 'title.instructions'; @endphp
@section('main')

  <section class="px-default flex flex-col justify-center items-center py-4 gap-4 bg-blue text-white">
    <h1>Thank you so much for booking a car with us!</h1>
    <h2>Yet, there are some things you should check</h2>
  </section>

  @if($arrival == "airport" || $departure == "airport")
    <section id="plane" class="grid grid-cols-2 py-12 px-default gap-12 bg-center bg-cover text-white">
      <div></div>
      <div class="px-4 flex flex-col items-start justify-start h-full gap-4">
        <h2>We need your <b>Flight ID</b></h2>
        <p>
          We need your <b>arrivel</b> Flight ID so we can track your flight and make sure you have arrived <b>on time</b>.
          If you provide your Flight ID we can resqueduale a <b>free</b> new deliver.<br/>
          We also ask for the departure <b>Flight ID</b>, so if there's any delay we can deal a new departure time.
        </p>
        <a class=" underline font-semibold" href="">Know where we can meet at the airport ></a>
        <a class="bg-green-500 hover:bg-green-400 px-2 py-1 rounded-lg" href="">Inform us of your Flight Id</a>
      </div>
    </section>
  @endif
  @if($arrival != "airport" || $departure != "airport")
    <section id="hotel" class="grid grid-cols-2 py-12 px-default gap-12 bg-center bg-cover">
      <div></div>
      <div class="px-4 flex flex-col items-start justify-start h-full gap-4">
        <h2>We need your <b>Hotel Address</b></h2>
        <p>
          We need your Hotel Address to meet to deliver and receive the car.
        </p>
        <a class="bg-green-500 hover:bg-green-400 px-2 py-1 rounded-lg text-white" href="">Inform us of your Hotel Address</a>
      </div>
    </section>
  @endif

  <section class="px-default flex flex-col justify-center items-center py-4 gap-4">
    <h1>Important information</h1>
    <p>
      Ao receber o carro, será enviado para o seu e-mail o Contrato de Aluguer, para ser assinado digitalmente.<br/>Após assinar, receberá outro e-mail com a sua cópia assinada em PDF.<br/>
      Para tratar de assuntos relativos a entrega, recolha, quaisquer assuntos em relação ao carro e situações de emergência, por favor contacte-nos em:<br/>+351 938 342 970
    </p>
  </section>

@endsection
