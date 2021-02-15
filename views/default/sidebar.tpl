<div class="sidebar">
    <div class="sidebar__title">Меню:</div>
    <div class="sidebar__menu">
        {foreach $rsCategories as $item }
            <a href="" class="sidebar__menu-item">{$item['name']}</a>
            {if isset($item['children'])}
                {foreach $item['children'] as $child}
                    <a href="" class="sidebar__menu-item">--   {$child['name']}</a>
                {/foreach}
            {/if}
        {/foreach}
    </div>
</div>