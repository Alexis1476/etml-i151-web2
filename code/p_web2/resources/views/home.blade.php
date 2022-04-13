@extends('layout')
@section('content')

    <h2 class="flex justify-center text-4xl mb-8 mt-4">Site description</h2>
    <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit mauris,
        efficitur at enim at,
        eleifend consequat libero. Aliquam hendrerit gravida ante, id tristique nibh rhoncus imperdiet.
        Nullam dictum massa lorem, ac lobortis velit placerat ut. Donec aliquam odio sit amet nisi porta
        fringilla. Integer vel commodo dolor, vel hendrerit leo. Phasellus vel interdum sapien. Maecenas
        dapibus metus metus, eget rutrum erat ultricies at. Aliquam sit amet efficitur risus. Curabitur
        lectus dui, vestibulum et mollis vel, tincidunt vel mauris.
        Proin at malesuada quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum
        euismod sem id elit blandit, pretium aliquam mi imperdiet. Quisque elementum nibh ut augue placerat
        pretium. Pellentesque eu massa mollis nulla pretium molestie. Nullam lorem dolor, blandit commodo
        massa vitae, fermentum bibendum velit. Aliquam ac nibh in lectus laoreet molestie. Sed nec felis
        non nibh vehicula molestie. Fusce vehicula dignissim libero. Nunc a lorem enim. Maecenas sit amet
        leo faucibus, tincidunt magna non, vestibulum diam. Integer porttitor et lacus at ultricies.</p>


    <div class="flexCardDiv pt-10">
        {{--ToDo faire une boucle foreach pour ajouter les livres--}}
        @foreach($books as $book)
            @include('partials.book-card',[
                'title'=>$book->booTitle,
                'author'=>$book->author->autFirstName,
                'user'=>$book->user->useNickname,
                'img'=>$book->booCoverName
            ])
        @endforeach
    </div>

@endsection
