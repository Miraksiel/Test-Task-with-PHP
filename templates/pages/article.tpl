{include file="layouts/header.tpl" pageTitle=$article.title}

<div class="container">
    <div class="breadcrumb">
        <a href="/" class="back-link">← На главную</a>
    </div>

    <article class="article-full">
        {if $article.image}
            <img src="{$article.image}" alt="{$article.title}" class="article-image">
        {/if}

        <h1>{$article.title}</h1>

        <div class="article-meta">
            <span class="date">{$article.created_at|date_format:"%d.%m.%Y"}</span>
            <span class="views">{$article.views} просмотров</span>
            <div class="categories">
                {foreach $categories as $cat}
                    <a href="/category/{$cat.slug}" class="category-badge">{$cat.name}</a>
                {/foreach}
            </div>
        </div>

        <div class="article-description">
            <p><strong>{$article.description}</strong></p>
        </div>

        <div class="article-content">
            {$article.content|nl2br}
        </div>
    </article>

    {if $similar|count > 0}
        <section class="similar-articles">
            <h2>Похожие статьи</h2>
            <div class="articles-grid">
                {foreach $similar as $article}
                    {include file="components/article-card.tpl" article=$article}
                {/foreach}
            </div>
        </section>
    {/if}
</div>

{include file="layouts/footer.tpl"}
