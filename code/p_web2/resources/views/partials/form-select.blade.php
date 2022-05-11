<div class="mb-4">
    <label class="label" for="{{$nameItem}}">
        {{$text}}
    </label>
    <div class="relative">
        <select
            class="select {{ $errors->has($nameItem) ? 'border-red-500' : ''}}"
            id="{{$nameItem}}"
            name ="{{$nameItem}}">
            <option value="">-</option>
            @forelse($options as $option)
                <option {{old($nameItem)==$option->id ? 'selected' : ''}} value="{{$option->id}}">{{$option->name}}</option>
            @empty
            @endforelse

        </select>
        <div class="pointer">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
            </svg>
        </div>
    </div>
    @if($errors->has($nameItem))
        <p class="text-red-500 text-xs italic">{{$errors->first($nameItem)}}</p>
    @endif
</div>
