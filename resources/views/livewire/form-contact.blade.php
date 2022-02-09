<div class="w-full md:mt-0 md:w-2/5">
  <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
      <h3 class="mb-6 text-2xl font-medium text-center">Solicita tu demo</h3>
      @error('ruc')
      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
          {{ $message }}
        </span>
      @enderror
      <input type="text" autofocus name="ruc" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="ruc" placeholder="RUC">

      @error('name')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
          {{ $message }}
        </span>
      @enderror
      <input type="text" name="text" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="name" placeholder="Nombres">
      @error('email')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
          {{ $message }}
        </span>
      @enderror
      <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="email" placeholder="Correo Electrónico">

      <input type="text" name="text" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="phone" placeholder="Teléfono">
      <textarea class="resize rounded-md block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="message" placeholder="Envía un mensaje"></textarea>

      @error('plan')
      <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
          {{ $message }}
        </span>
      @enderror
      <select name="plan" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="plan">
          <option value="">Selecciona un plan</option>
          <option value="Emprende">Emprende</option>
          <option value="Crece">Crece</option>
          <option value="Consolida">Consolida</option>
      </select>

      <div class="block">
          <button
              class="w-full px-3 py-4 font-medium text-white bg-yellow-400 rounded-lg"
              wire:click.prevent='sendEmail'

              wire:target="sendEmail"
          >
              <div class="flex items-center justify-center" wire:loading>
                  <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  Enviando...
              </div>
              <div wire:loading.remove>
                  Enviar
              </div>
          </button>
      </div>
  </div>
</div>
