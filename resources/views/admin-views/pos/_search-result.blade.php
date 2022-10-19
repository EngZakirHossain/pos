<link rel="stylesheet" href="{{asset('public/assets/admin')}}/css/custom.css"/>
<ul class="list-group list-group-flush">
    @foreach($products as $i)
        <li class="list-group-item" >
            <a href="javascript:" onclick="$('.search-bar-input-mobile').val('{{$i['name']}}'); $('.search-bar-input').val('{{$i['name']}}'); addToCart('{{ $i->id }}')">
                <img class="img-one-plst"
                     src="{{asset('storage/product')}}/{{$i['image']}}"
                     onerror="this.src='{{asset('public/assets/admin/img/160x160/img2.jpg')}}'">
                <span>{{ $i['name'] }}</span>
            </a>
        </li>
    @endforeach
</ul>
