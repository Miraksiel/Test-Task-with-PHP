{include file="layouts/header.tpl" pageTitle="Главная страница"}

<div class="container">
    {foreach $categories as $category}
        <section class="category-section">
            <div class="category-header">
                <h2>{$category.name}</h2>
                <p>{$category.description}</p>
                <a href="/category/{$category.slug}" class="btn">Все статьи</a>
            </div>

            <div class="articles-grid">
                {foreach $category.articles as $article}
                    {include file="components/article-card.tpl" article=$article}
                {/foreach}
            </div>
        </section>
    {/foreach}
</div>

{include file="layouts/footer.tpl"}
