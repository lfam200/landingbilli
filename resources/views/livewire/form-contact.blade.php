<div class="w-full mt-4 md:mt-0 md:w-2/5">
  <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
      <h3 class="mb-6 text-2xl font-medium text-center">Solicita tu demo</h3>
      @error('name')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
          {{ $message }}
        </span>
      @enderror
      <input type="text" name="text" autofocus class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="name" placeholder="Nombres">
      @error('email')
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
          {{ $message }}
        </span>
      @enderror
      <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="email" placeholder="Correo Electrónico">

      <input type="text" name="text" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="phone" placeholder="Teléfono">
      <textarea class="resize rounded-md block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-yellow-400 focus:outline-none" wire:model.defer="message" placeholder="Envía un mensaje"></textarea>
      <div class="block">
          <button class="w-full px-3 py-4 font-medium text-white bg-yellow-400 rounded-lg" wire:click='sendEmail'>Enviar</button>
      </div>
  </div>
</div>
