{include file="header.tpl"}
<body>
<div class="container">
  <ul class="list-group mt-5">
  {foreach from=$materiales item=currentItem}
    <li class="list-group-item mb-2">
      <h2>{$currentItem->nombre}</h2>
      <p>{$currentItem->descripcion}<p>
    </li>
  {/foreach}
</ul>
</div>
</body>
{include file="footer.tpl"}