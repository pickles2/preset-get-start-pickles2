ページ内の目次を表現するモジュールです。

Pickles 2 の機能と連携し、ページ内の見出しの階層を解析して自動的に目次を生成します。


```html
<div class="anchor_links">
	<p class="anchor_links-heading">INDEX</p>
	<ul>
		<li><a href="javascript:;">1. ページ内リンク</a></li>
		<li><a href="javascript:;">2. ページ内リンク</a>
		<ul>
			<li><a href="javascript:;">2.1. ページ内リンク</a></li>
			<li><a href="javascript:;">2.2. ページ内リンク</a></li>
		</ul>
		</li>
		<li><a href="javascript:;">3. ページ内リンク</a></li>
	</ul>
</div><!-- /.anchor_links -->
```
