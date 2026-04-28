{include file="layouts/header.tpl" pageTitle=$category.name}

<div class="container">
    <div class="breadcrumb">
        <a href="/" class="back-link">← На главную</a>
    </div>

    <div class="category-info">
        <h1>{$category.name}</h1>
        <p>{$category.description}</p>
    </div>

    <div class="sorting">
        <a href="?sort=date" class="{if $sort == 'date'}active{/if}">По дате</a>
        <a href="?sort=views" class="{if $sort == 'views'}active{/if}">По просмотрам</a>
    </div>

    <div class="articles-list">
        {foreach $articles as $article}
            {include file="components/article-card.tpl" article=$article}
        {/foreach}
    </div>

    {include file="components/pagination.tpl" pagination=$pagination}
</div>

{include file="layouts/footer.tpl"}
