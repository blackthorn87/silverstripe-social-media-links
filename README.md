# silverstripe-social-media-links

A very simple module which allows you to add links to your social media pages. These are then output on a template which can be modified for your own purpose if needed. The template output is simple adding the links into an un-ordered list.

### Requirements

**Font Awesome** - Only required if you want to use the font awesome icons and not your custom ones. This NOT included with this module and you need to add it to your project yourself.

- You will need to style this as there is none provided.

### Installation

This module isn't on packgist at the moment, and might never be as the level of maintenance required isn't something I can commit to at the moment. I will do my best to update and refine the module when I can.

**Instructions**

- Download from the repository and extract in your SilverStripe root directory.
- Rename the extracted folder to 'social'; it needs to be all lowercase.
- Run a dev/build?flush=1 on your site.
- This will be installed now.

### Usage

All you need to do is include ```<% include SocialMedia %>``` in your template where you want the links to appear. You can customise the template if you want by copying it from the module directory to the equivelent directory in your theme.

#### Adding Links

- Login to the Admin Panel
- Go to Settings on the left
- There is a Social Links field which can be toggled open and closed
- In here you can add the links to your social media pages
- Do not add your custom icons until after you've created and saved the link, otherwise you'll get errors

###Support

*Note, this module was developed for personal use, experimentation and further learning and development. Please feel free to use it if you wish, but support for the module will be either non existant for the moment, or patchy at best.*

### Future Development

- add the ability to turn icons on or off (for those who aren't using font awesome or custom icons)
- include the template code to display customised uploaded icons (including sizing - this needs to be added to the Data Object).