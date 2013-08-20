<div class='filter filter-commented'>
    <ol class='filter-items'>
        <li class='filter-item is-active'>
            <a href="#" data-commented="false"><div class='filter-item-label'>All Users</div>
            </a>
        </li>
        {foreach $users as $user}
        <li class='filter-item'>
            <a href="#" data-commented="true"><div class='filter-item-label'>{$user.name}</div>
            </a>
        </li>
        {/foreach}
    </ol>
</div>