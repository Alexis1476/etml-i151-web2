<div class="mb-4">
    <label class="label" for="{{$nameItem}}">
        {{$text}}
    </label>
    <input
        class="input {{ $errors->has($nameItem) ? 'border-red-500' : ''}}"
        id="{{$nameItem}}" type="{{$type}}" placeholder="{{$text}}" name="{{$nameItem}}"
        @if($nameItem != 'password')
            value="{{old($nameItem)}}"
        @endif
    >
    @if($errors->has($nameItem))
        <p class="text-red-500 text-xs italic">{{$errors->first($nameItem)}}</p>
    @endif
</div>
