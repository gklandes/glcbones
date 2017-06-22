# GLCBones
This is my humble attempt to streamline the setup of a Wordpress site built on Bootstrap styles. It also implements Fontawesome over Bootstrap's glyphicons just because I like them better. I used the "Bones" theme as my starting point and give super high marks to Mr. Machado for a theme code base that was so well documented that it taught me most of what I needed to know to get things rolling.

## Credits
### Bones WP Theme
Bones is designed to make the life of developers easier. It's built
using HTML5 & has a strong semantic foundation.
Designed by Eddie Machado
http://themble.com/bones
License: WTFPL
License URI: http://sam.zoy.org/wtfpl/
Are You Serious? Yes.

### Bootstrap
http://getbootstrap.com/

### Fontawesome
http://fortawesome.github.io/Font-Awesome/

# Installation
* clone this repo outside the webroot
* copy or symlink the 'glcbones' folder into _webroot_/wp-content/themes/

# Setup Notes
* install theme
* Create page 'HOME'; set template to a 'home-*' theme; set as static home page (Appearence > Customize > Static Front Page)
* Create page 'Blog'; select this page as 'posts' page (Appearence > Customize > Static Front Page)
* Stub out pages for top bar ('about', 'contact', etc.)
* Create new menu 'MainNav' (Appearence > menus); add any top bar pages; remember to add new top bar pages to this menu
* Edit Sidebar; remove search field
