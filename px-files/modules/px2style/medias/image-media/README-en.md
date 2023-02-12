Represent image media. This module is used in combination with the Float Media Module.

Insert an image and enter your caption text.

This module is written with a `<figure>` element, not just a simple `<img>` element, like this:

```html
<figure class="px2-embedded-media">
   <div class="px2-embedded-media__image-media"><img src="xxxxx.png" alt="Alt Text" /></div>
   <figcaption class="px2-embedded-media__caption">Image Caption</figcaption>
</figure>
```
