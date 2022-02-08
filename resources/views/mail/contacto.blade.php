<body class="h-screen overflow-hidden flex items-center justify-center">
  <div>
    <h1 class="font-bold text-2xl">Nueva Solicitud de Contacto</h1>
    <div class="mt-8 text-gray-500 leading-7 tracking-wider">
      <p>RUC: {{ $ruc }}</p>
      <p>Nombre: {{ $name }}</p>
      <p>E-mail: {{ $email }}</p>
      <p>Teléfono: {{ $phone }}</p>
      <p>Mensaje: {{ $text }}</p>
      <p>Plan: {{ $plan }}</p>
    </div>
  </div>
</body>
