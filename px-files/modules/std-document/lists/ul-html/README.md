リストを表現します。

ドラッグ可能なモジュール形式ではなく、 Markdown などのHTMLソースの形式で記述します。

HTML や Markdown テキストの扱いに慣れているユーザーにとって記述しやすいインターフェイスで入力できます。


## Markdown での標準リスト記述例

```markdown
- List item 1
- List item 2
- List item 3
```

## HTML での標準リスト記述例

```html
<ul>
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>
```

## 選択できるリスト表現の種類

標準的なリスト形式の他、いくつかのリスト表現形式を選択できます。


### 標準リスト

```html
<ul>
	<li>リストアイテム1</li>
	<li>リストアイテム2</li>
	<li>リストアイテム3</li>
</ul>
```

### 垂直リスト

```html
<ul class="px2-horizontal-list">
	<li>垂直リストアイテム1</li>
	<li>垂直リストアイテム2</li>
	<li>垂直リストアイテム3</li>
</ul>
```

### 水平リスト

```html
<ul class="px2-horizontal-list">
	<li>水平リストアイテム1</li>
	<li>水平リストアイテム2</li>
	<li>水平リストアイテム3</li>
</ul>
```

#### 水平リスト (左寄せ)

```html
<ul class="px2-horizontal-list px2-horizontal-list--left">
	<li>水平リストアイテム1</li>
	<li>水平リストアイテム2</li>
	<li>水平リストアイテム3</li>
</ul>
```


#### 水平リスト (中央寄せ)

```html
<ul class="px2-horizontal-list px2-horizontal-list--center">
	<li>水平リストアイテム1</li>
	<li>水平リストアイテム2</li>
	<li>水平リストアイテム3</li>
</ul>
```


#### 水平リスト (右寄せ)

```html
<ul class="px2-horizontal-list px2-horizontal-list--right">
	<li>水平リストアイテム1</li>
	<li>水平リストアイテム2</li>
	<li>水平リストアイテム3</li>
</ul>
```



### 注釈リスト

```html
<ul class="px2-note-list">
	<li>注釈リストアイテム1</li>
	<li>注釈リストアイテム2</li>
	<li>注釈リストアイテム3</li>
</ul>
```
