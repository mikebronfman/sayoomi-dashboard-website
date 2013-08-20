<div class='filter filter-property'>
    <ol class='filter-items'>
        <li class='filter-item is-active'>
            <a href="#" data-key="device" data-value="null"><div class='filter-item-label'>All Products</div>
            </a>
        </li>
        {foreach $devices as $device}
        <li class='filter-item'>
            <a href="#" data-key="device" data-value="Glass"><div class='filter-item-label'>{$device.name}</div>
            </a>
        </li>
        {/foreach}
    </ol>
</div>