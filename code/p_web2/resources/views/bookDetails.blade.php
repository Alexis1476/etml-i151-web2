@extends('layout')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="block w-4/5 mt-5 mx-auto border-4 border-blue-500 rounded-3xl p-10">
        <div class="flex flex-row justify-between w-full h-full">
            <section class="text-blue-500">
                {{--TODO : Remplacer par des variables--}}
                <h1 class="text-2xl font-bold">Book title :</h1>
                <h2 class="text-xl my-4">Category :</h2>
                <h2 class="text-xl my-4">Number of pages :</h2>
                <h2 class="text-xl my-4">Author :</h2>
                <h2 class="text-xl my-4">Editor :</h2>
                <h2 class="text-xl my-4">Average :</h2>
            </section>
            <section>
                <img class="rounded-lg object-cover h-full" src="https://picsum.photos/200/300"
                         alt="Book cover">
            </section>
        </div>
        <div>
            <h2 class="text-xl text-blue-500 my-4">Resume :</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit mauris, efficitur at enim at,
                eleifend consequat libero. Aliquam hendrerit gravida ante, id tristique nibh rhoncus imperdiet. Nullam
                dictum massa lorem, ac lobortis velit placerat ut. Donec aliquam odio sit amet nisi porta fringilla.
                Integer vel commodo dolor, vel hendrerit leo. Phasellus vel interdum sapien. Maecenas dapibus metus
                metus, eget rutrum erat ultricies at. Aliquam sit amet efficitur risus. Curabitur lectus dui, vestibulum
                et mollis vel, tincidunt vel mauris.

                Proin at malesuada quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum
                euismod sem id elit blandit, pretium aliquam mi imperdiet. Quisque elementum nibh ut augue placerat
                pretium. Pellentesque eu massa mollis nulla pretium molestie. Nullam lorem dolor, blandit commodo massa
                vitae, fermentum bibendum velit. Aliquam ac nibh in lectus laoreet molestie. Sed nec felis non nibh
                vehicula molestie. Fusce vehicula dignissim libero. Nunc a lorem enim. Maecenas sit amet leo faucibus,
                tincidunt magna non, vestibulum diam. Integer porttitor et lacus at ultricies.</p>
        </div>
    </div>
@endsection
