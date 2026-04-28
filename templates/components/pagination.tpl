{if $pagination.total > 1}
<div class="pagination">
    {if $pagination.current > 1}
        <a href="?page={$pagination.current - 1}&sort={$pagination.sort}" class="btn">« Назад</a>
    {/if}

    {for $i=1 to $pagination.total}
        {if $i == $pagination.current}
            <span class="current">{$i}</span>
        {else}
            <a href="?page={$i}&sort={$pagination.sort}">{$i}</a>
        {/if}
    {/for}

    {if $pagination.current < $pagination.total}
        <a href="?page={$pagination.current + 1}&sort={$pagination.sort}" class="btn">Вперёд »</a>
    {/if}
</div>
{/if}
