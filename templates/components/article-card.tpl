<div class="article-card">
    <a href="/article/{$article.slug}">
        {if $article.image}
            <img src="{$article.image}" alt="{$article.title}">
        {/if}
        <h3>{$article.title}</h3>
        <p class="description">{$article.description|truncate:150}</p>
        <div class="meta">
            <span class="date">{$article.created_at|date_format:"%d.%m.%Y"}</span>
            <span class="views">{$article.views} просмотров</span>
        </div>
    </a>
</div>
