<!--
Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
Date: 18.05.2022
Description: Partial pour le style des inputs
-->

<div class="mb-4">
    <label class="label" for="{{$nameItem}}">
        {{$text}}
    </label>
    <!-- Ajout d'un input texte pour avec la valeur désirer dedans -->
    <input
        class="input {{ $errors->has($nameItem) ? 'border-red-500' : ''}}"
        id="{{$nameItem}}" type="{{$type}}" placeholder="{{$text}}" name="{{$nameItem}}"
        {{/*Si c'est un mdp il n'affiache pas les caractères insérer*/}}
        @if($nameItem != 'password')
            value="{{old($nameItem)}}"
        @endif
        {{/*Si c'est une date il met un maximum à ne pas dépacer*/}}
        @if($nameItem=='publishingDate')
            max="{{date('Y-m-d')}}"
        @endif
    >
    <!-- Affichage des erreurs -->
    @if($errors->has($nameItem))
        <p class="text-red-500 text-xs italic">{{$errors->first($nameItem)}}</p>
    @endif
</div>
