<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nome" wire:model="nome">
                            @if ($errors->has('nome'))
                                <span class="text-danger">{{ $errors->first('nome') }}</span>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="cognome" class="block text-gray-700 text-sm font-bold mb-2">Cognome:</label>
                            <input type="string" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cognome" wire:model="cognome">
                            @if ($errors->has('cognome'))
                                <span class="text-danger">{{ $errors->first('cognome') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <input type="string" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" wire:model="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="anno_iscrizione" class="block text-gray-700 text-sm font-bold mb-2">Iscrizione:</label>
                            <input type="string" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="anno_iscrizione" wire:model="anno_iscrizione">
                            @if ($errors->has('anno_iscrizione'))
                                <span class="text-danger">{{ $errors->first('anno_iscrizione') }}</span>
                            @endif
                        </div>
                        <label class="block text-gray-600 font-light mb-2">Seleziona il genere</label>
                        <div class="flex">
                            <div class="flex items-center mb-2 mr-4">
                                <input type="radio" id="maschio" name="maschio" value="Maschio" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2" wire:model="genere">
                                <label for="genere" class="text-gray-600">Maschio</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input type="radio" id="femmina" name="femmina" value="Femmina" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2" wire:model="genere">
                                <label for="genere" class="text-gray-600">Femmina</label>
                            </div>
                            <div class="flex items-center mb-2">
                                <input type="radio" id="femmina" name="neutrale" value="Neutrale" class="h-4 w-4 text-gray-700 px-3 py-3 border rounded mr-2" wire:model="genere">
                                <label for="genere" class="text-gray-600">Neutrale</label>
                            </div>
                            <br>
                            @if ($errors->has('genere'))
                                <span class="text-danger">{{ $errors->first('genere') }}</span>
                            @endif
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="save()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Salva</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Elimina</button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>
    </div>
</div>
