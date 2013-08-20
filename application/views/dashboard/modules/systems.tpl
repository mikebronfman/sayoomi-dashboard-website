<div class='filter filter-group'>
    <ol class='filter-items'>
        <li class='filter-item'>
            <a href="#" data-group="null"><div class='filter-item-label'>All Systems</div>
            </a>
        </li>
        {foreach $systems as $system}
        <li class='filter-item'>
            <a href="#" data-group="#"><div class='filter-item-label'>{$system.description}</div>
            </a>
        </li>
        {/foreach}
    </ol>
</div>