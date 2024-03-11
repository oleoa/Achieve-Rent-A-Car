<!DOCTYPE html>
<html>
  <head>
    <title>Novo Contato Do Site Achieve</title>
  </head>
  <body>
    <h1>Novo Contato Do Site Achieve</h1>
    <p><strong>From:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
  </body>
  <style>

    body {
      font-family: Arial, sans-serif;
      background-color: #161616;
      padding-right: 4rem;
      padding-left: 4rem;
      padding-top: 4rem;
      padding-bottom: 4rem;
      color: #fff;
    }

    @media (min-width: 1280px) {
      body {
        padding-left: 15rem;
        padding-right: 15rem;
        padding-top: 4rem;
        padding-bottom: 4rem;
      }
    }

  </style>
</html>
