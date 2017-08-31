# A WordPress Starter Theme, Made for Segments

This open repo contains my WordPress starter theme. This theme includes many of my standards after 10+ developing/designing websites.

This theme is a bit of an evolution of [a gist] I wrote about organizing WordPress theme code. 

Since the gist, I've added new template_part types called "Segments". Think of Segments  like mini content areas  within a page. The standard segments that I've included with this theme are:
- Text Segments include a body and title. Depending on the amount of content within the body, it'll be given a class prefix "regular", "long", or "brief". If you're adding both a media segment to the text segment, you can  select a "Two Column" content display so the media appear next to the text.
- The Media Segment can include either a media grid, portrait and landscape media item, single media item or slideshow. Available media types include images, PDFs, YouTube videos, and links.
- Callout Segments: Callouts are basically banner elements. You can add a background image and scale them to different sizes.
- Info Box Segments: Info Boxes are the most basic segment type. They just include a title and body, usually under 220 characters (but no character restrictions are imposed).

The goal of this theme is to create a framework that I can incorperate any design into, so you won't find much style code. That said, a developer should have to do minimal work with the theme's HTML/PHP structure and the all the custom fields are integrated into the themes files.

### Styling the Theme
Lots of thought went into the structure in the `/styles` folder. I'm trying to be explicit, while avoiding redundancy. All SCSS is pulled into `style.scss`. There you can update the theme name and add any external fonts. You should then move to `_variables.scss` where all the theme variables are stored. After that, I would jump into any one of the files (they all should be pretty straight forward and most correspond with template parts).

### Required Plugins
To run the theme properly, you'll need [Advanced Custom Fields] (version 5+). You also will need a SASS compiler to spit out CSS from the SCSS I've included. I use the [SASS Plugin for Coda].

### Contibuting
The `master` branch includes the most stable site build. Other branches are feature specific. 

I actively update the theme to incorporate stable technology, architecture, and best practices. [_s] and [Sage] loosely inspired my theme's' architecture. [@mdo]'s [code guide] was also an inspiration. I love to follow [DRY] principles and keep features and elements modular when possible. That said, I also love to keep code explicit and readable.

### Issue Reporting and Questions
Issues and questions can be added under this repo's ["Issues" tab]. You can always send me a message, [@bbertucc].

Happy hacking!

-Bb.

[Advanced Custom Fields]:https://www.advancedcustomfields.com/
[Sage]:https://github.com/roots/sage
[_s]:https://github.com/Automattic/_s
[@bbertucc]:https://github.com/bbertucc
[SASS Plugin for Coda]:https://github.com/keegnotrub/coda-sass-plugin
[DRY]:https://en.wikipedia.org/wiki/Don%27t_repeat_yourself
[a gist]:https://gist.github.com/bbertucc/0918e342a8c981e78e88e714cde1e9d5
[code guide]:http://codeguide.co/
[@mdo]:https://github.com/mdo
["Issues" tab]:https://github.com/4pt0/4pt0-theme/issues
