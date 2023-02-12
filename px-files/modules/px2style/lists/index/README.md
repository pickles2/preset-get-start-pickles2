ページ内の目次を表現するモジュールです。

ページ内の見出しの階層を解析して自動的に目次を生成します。

これは通常、次のようなHTML構造になります。

```html
<div class="anchor_links">
	<p class="anchor_links-heading">INDEX</p>
	<ul>
		<li><a href="#">1. ページ内リンク</a></li>
		<li><a href="#">2. ページ内リンク</a>
			<ul>
				<li><a href="#">2.1. ページ内リンク</a></li>
				<li><a href="#">2.2. ページ内リンク</a></li>
			</ul>
		</li>
		<li><a href="#">3. ページ内リンク</a></li>
	</ul>
</div><!-- /.anchor_links -->
```

※このモジュールは、Pickles 2 のページ内リンク生成機能に依存します。
