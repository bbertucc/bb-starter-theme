# A WordPress Starter Theme, Made for Segments

This open repo contains my WordPress starter theme. This theme includes many of the standards that I've developed after 10+ developing websites. 

This theme is a bit of an evolution since I wrote [my gist] about organizing WordPress theme code. 

I've added new template_part types called "Segments". Segments are like mini layouts within a page. The standard segments that I've included with this theme are:
- Text Segment, includes body and title. Depending on the amount of content within the body, it'll be given a class prefix "regular", "long", or "brief". If you're adding a media segment to the text segment, you can show select a "Two Column" display so the two segments appear next to each other.
- Media Segment, including various media layouts: grid, portrait and landscape, single media item or slideshow. I've built conditions for images, PDFs, videos, and link media items.'
- Callout: Callouts are basically banner elements. You can add a background image and scale them to different sizes.
- Info Box: Info boxes are the most basic segment type. They just include a title and body, usually under 220 characters (but no character restrictions are imposed).

### Issue Reporting and Questions
Issues and questions can be added under this repo's ["Issues" tab]. You can always send me a message, [@bbertucc].

### Development
The `master` branch includes the most stable site build. Other branches are feature specific. 

My starter theme is actively updated to incorporate stable technology, architecture, and best practices. The [_s] and [Sage] loosely inspired the theme architecture. [@mdo]'s [code guide] was also an inspiration. I love to follow [DRY] principles and keep features and elements modular, but I also love to keep code explicit and readable.

### Required Plugins
To run the theme properly, you'll need to install and activate [Advanced Custom Fields] (version 5+). Much of the content is saved in ACF fields.

## Contributing
My theme is open for contributions. You can report issues under the ["Issues" tab], or fork this repo and help code. I'd love to include your updates!

Happy hacking!

-Bb.

[Advanced Custom Fields]:https://www.advancedcustomfields.com/
[Sage]:https://github.com/roots/sage
[_s]:https://github.com/Automattic/_s
[@bbertucc]:https://github.com/bbertucc
[DRY]:https://en.wikipedia.org/wiki/Don%27t_repeat_yourself
[my gist]:https://gist.github.com/bbertucc/0918e342a8c981e78e88e714cde1e9d5
[code guide]:http://codeguide.co/
[@mdo]:https://github.com/mdo
["Issues" tab]:https://github.com/4pt0/4pt0-theme/issues
