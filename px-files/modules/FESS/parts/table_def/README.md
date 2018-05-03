学習しやすさのために <q>可能な限り、素のHTMLの構造のままでマークアップできるように設計する</q> コンセプトに従うならば、本来はクラス名なしの素のHTMLがデフォルトのテーブルスタイルになるべきです。しかし、テーブルに限っては、素のデザインにはボーダーが表示されず、一見して表だと分かるスタイルは適用されません。これをデフォルトとしてボーダーをつけるように変更するのは混乱を招く元となるおそれがあるので、例外的に、デフォルトスタイルにクラス名 `.def` を定義しています。

```html
<table class="def">
	<thead>
		<tr>
			<th>thead ヘッダセル</th>
			<td>thead セル</td>
			<td>thead セル</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>tfoot ヘッダセル</th>
			<td>tfoot セル</td>
			<td>tfoot セル</td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<th>tbody ヘッダセル</th>
			<td>tbody セル</td>
			<td>tbody セル</td>
		</tr>
		<tr>
			<th>tbody ヘッダセル</th>
			<td>tbody セル</td>
			<td>tbody セル</td>
		</tr>
	</tbody>
</table>
```

コンテンツ制作者は、`table` 要素の幅(width)、高さ(height)、行や列の幅(width)、高さ(height) を上書きして変更できます。

```html
<table class="def" width="100%">
	<tbody>
		<tr>
			<th width="30%">見出しセル</th>
			<td width="70%">セル</td>
		</tr>
	</tbody>
</table>
```
