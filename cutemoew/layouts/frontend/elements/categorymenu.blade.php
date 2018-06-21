@foreach($categoriesTree as $item)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="{{ '#col'.$item->id }}">
                    {{$item->name}}
                </a><i class="indicator fa fa-angle-right pull-right"></i>
            </h4>
        </div>
        <?php $sub= $item->loadForNav();
        $subchild = $sub['subs'];
        ?>
        @if(count($sub['subs'])>0 || count($sub['products']) > 0)
            <div id="{{ 'col'.$item->id }}" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="product-categories">
                        <ul>
                            @foreach($subchild as $subnav)
                                <li><a href="{{ url('category/view/'.$subnav['uri'] )}}">{{$subnav['name']}} ({{count($sub['products'])}})</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endforeach