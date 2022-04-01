<div class="mb-4">
    <label class="block text-blue-500 text-sm font-bold mb-2" for="{{$nameItem}}">
        {{$text}}
    </label>
    <div class="relative">
        <select
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="{{$nameItem}}">
            {{--TODO: Recevoir array de données et faire foreach pour affichage des options --}}
            <option>Alexis</option>
            <option>Robi</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
            </svg>
        </div>
    </div>
</div>
