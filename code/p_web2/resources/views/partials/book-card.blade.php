<div class="w-2/6 p-20 pt-0">
    <div>
        <h2 class="text-xl font-bold"><a href="#">{{$title}}</a></h2>
        <div class="grid grid-cols-2 grid-flow-row rounded border-2 border-blue-500 px-1 py-1">
            <div class="row-start-1">
                <p class="text-clip overflow-hidden footer-color">{{$author}}</p>
                <a href="#" class="footer-color text-clip overflow-hidden">{{$user}}</a>
            </div>
            <div class="row-start-2"></div>
            <img src="img/{{$img}}"
                 class="col-start-2 row-span-2 min-w-3/5 min-h-5/5 justify-self-end rounded border-2 border-blue-500 mt-1 mr-1 mb-1">
        </div>
    </div>
</div>
