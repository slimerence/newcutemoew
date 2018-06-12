<?php
$priceLowToHigh = $direction=='asc' && $orderBy=='price';
$priceHighToLow = $direction=='desc' && $orderBy=='price';
$nameLowToHigh = $direction=='asc' && $orderBy=='product_name';
$nameHighToLow = $direction=='desc' && $orderBy=='product_name';
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#sort">
            ayaya
        </h4>
    </div>

    <div id="sort" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="product-categories">
                <ul>
                    <li><a href="{{ $priceLowToHigh ? '#' : url('category/view/'.$category->uri.'?orderBy=price&dir=asc') }}" class="dropdown-item {{ $priceLowToHigh ? 'is-active' : null }}">
                        Price low to high
                    </a></li>
                    <li><a href="{{ $priceHighToLow ? '#' : url('category/view/'.$category->uri.'?orderBy=price&dir=desc') }}" class="dropdown-item {{ $priceHighToLow ? 'is-active' : null }}">
                        Price high to low
                    </a></li>
                    <hr class="dropdown-divider">
                    <li><a href="{{ $nameLowToHigh ? '#' : url('category/view/'.$category->uri.'?orderBy=product_name&dir=asc') }}" class="dropdown-item {{ $nameLowToHigh ? 'is-active' : null }}">
                        Product Name A->Z
                    </a></li>
                    <li><a href="{{ $nameHighToLow ? '#' : url('category/view/'.$category->uri.'?orderBy=product_name&dir=desc') }}" class="dropdown-item {{ $nameHighToLow ? 'is-active' : null }}">
                        Product Name Z->A
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>