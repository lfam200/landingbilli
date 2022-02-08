<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicita tu Demo - Billi.pe</title>
    <link rel="icon" type="image/x-icon" href="{{ secure_asset('img/favicon.ico')  }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    @livewireStyles
</head>
<body>

<!-- Section 1 -->
<section class="w-full px-8 py-16 bg-yellow-400 xl:px-8">
    <div class="flex md:hidden justify-center mb-16">
        <img src="{{ secure_asset('img/logo_billi.png')}}" alt="" class="w-32">
    </div>
    <h2 class="md:hidden text-2xl mb-4 font-extrabold text-black sm:text-3xl md:text-5xl">
        Factura, administra y gana tiempo.
    </h2>
    <p class="md:hidden text-xl text-gray-600 mb-16">Con Billi crearás tus comprobantes de venta electrónicos de forma fácil y rápida, además de ayudarte a tener todo listo para cumplir con la SUNAT</p>
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row">
{{--            <div class="w-full space-y-5 md:w-2/5 md:pl-16 ">--}}
{{--                <h2 class="hidden md:flex text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">--}}
{{--                    Factura, administra y gana tiempo.--}}
{{--                </h2>--}}
{{--                <p class="hidden md:flex text-xl text-gray-600 md:pr-16">Con Billi crearás tus comprobantes de venta electrónicos de forma fácil y rápida, además de ayudarte a tener todo listo para cumplir con la SUNAT</p>--}}
{{--            </div>--}}

            <div class="w-full space-y-5 md:w-3/5 md:pl-16 ">
              <div class="hidden md:flex justify-start mb-16">
                <img src="{{ secure_asset('img/logo_billi.png')}}" alt="" class="w-16 md:w-32 lg:w-48 object-center">
              </div>
                <h2 class="hidden md:flex text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                    Factura, administra y gana tiempo.
                </h2>
                <p class="hidden md:flex text-xl text-gray-600 md:pr-16">Con Billi crearás tus comprobantes de venta electrónicos de forma fácil y rápida, además de ayudarte a tener todo listo para cumplir con la SUNAT</p>
            </div>
            @livewire('form-contact')
        </div>
    </div>
</section>

<!-- Section 2 -->
<section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
            <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                Empieza a ver crecer tu negocio
            </h2>
            <p class="box-border mt-2 text-xl text-gray-900 border-solid sm:text-2xl">
                Contrata Billi, ahorra tiempo y dinero.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-4 leading-7 text-gray-900 border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3">
            <!-- Price 1 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-mr-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Emprende
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        S/ 60
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / mes
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
{{--                    Ideal for Startups and Small Companies--}}
                </p>
                <ul class="flex-1 p-0 mt-4 ml-5 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        300 Comprobantes por mes
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        1 Sucursal
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        3 Usarios
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                      <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                      1 Almacen
                  </li>
                  <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                    <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                      Reporte de comprobantes
                  </li>
                </ul>
            </div>
            <!-- Price 2 -->
            <div class="relative z-20 flex flex-col items-center max-w-md p-4 mx-auto my-0 bg-white border-4 border-yellow-400 border-solid rounded-lg sm:p-6 md:px-8 md:py-16">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Crece
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        S/ 80
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / mes
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
{{--                    Ideal for medium-size businesses to larger businesses--}}
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        1000 Comprobantes por mes
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        3 Sucursales
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        5 Usuarios
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        3 Alamacenes
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                      <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                        Reportes y consultas (RUC - DNI)
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                      <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                        Libros Electrónicos
                    </li>
                </ul>
            </div>
            <!-- Price 3 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-ml-3 sm:my-0 sm:p-6 md:my-8 md:p-8">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Consolida
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        S/ 120
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / mes
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
{{--                    Ideal for larger and enterprise companies--}}
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Comprobantes ilimitados
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Sucursales ilimitadas
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Usuarios ilimitados
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Almacenes ilimitados
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                      <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                        Reportes y consultas (RUC - DNI)
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                      <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-yellow-400 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                        Libros Electrónicos
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('alert', () => {
        Swal.fire({
            // position: 'top-end',
            icon: 'success',
            title: 'Tus datos han sido enviados, pronto nos pondremos en contacto contigo',
            showConfirmButton: false,
            timer: 2500
        })
    })

</script>
</body>
</html>
