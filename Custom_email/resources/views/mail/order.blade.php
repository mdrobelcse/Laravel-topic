<center>
  <div class="custom_mail" style="background: #ddd; padding: 10px">
    <h2 style="padding: 20px">Welcome {{ $user->name }}</h2>
    <p>We've receiving your confirmation of a order</p>
    <hr>
    <h3>You've given the following things - </h3>
    <address>
      <p>Shipping Address - {{ $order->shipping_add }}</p>
      <p>Phone Number - {{ $order-> phone_num }}</p>
      <p>Total amount - <strong style="color: red">{{ $order->product_pri }}</strong>  </p>
    </address>

    <p style="padding: 20px">&copy; 2018 - <a href="{{ route('index') }}">Laravel Easy Tutorials</a></p>
  </div>
</center>