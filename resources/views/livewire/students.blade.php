<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="create()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuovo</button>
        @if($modal)
            @include('livewire.crea')
        @endif

        <div class="text-right px-5 py-5">
            <input type = "text" class="form-control border rounded-lg text-gray-700 focus:outline-none focus:border-green-500 px-3 py-3" placeholder="Cerca..." wire:model="searchTerm">
        </div>
        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-purple-600 text-white">
                <th class="px-4 py-4 break-all">ID</th>
                <th class="px-4 py-4 break-all">NOME</th>
                <th class="px-4 py-4 break-all">COGNOME</th>
                <th class="px-4 py-4 break-all">EMAIL</th>
                <th class="px-4 py-4 break-all">ISCRIZIONE</th>
                <th class="px-4 py-4 break-all">GENERE</th>
                <th class="px-4 py-4 break-all">AZIONE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td class="border px-4 py-4 break-all">{{$student->id}}</td>
                <td class="border px-4 py-4 break-all">{{$student->nome}}</td>
                <td class="border px-4 py-4 break-all">{{$student->cognome}}</td>
                <td class="border px-4 py-4 break-all">{{$student->email}}</td>
                <td class="border px-4 py-4 break-all">{{$student->anno_iscrizione}}</td>
                <td class="border px-4 py-4 break-all">{{$student->genere}}</td>
                <td class="border px-4 py-4 text-center">
                    <button wire:click="edit({{$student->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mb-8 break-all">Modifica</button>
                    <button wire:click="delete({{$student->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 break-all">Elimina</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        </div>
    </div>
</div>
