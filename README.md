# WP Chords Fork
A fork of Emre Polat's great [WP Chords](https://wordpress.org/plugins/wp-chords/) Wordpress plugin with patched translation function.

# Introduction
WP Chords is a great Wordpress plugin that allows you to format and display the chords on your blog: you can set font sizes, enable transposing chords especially in your posts. It's also compatible with Google AMP (Accelerated Mobile Pages), which makes it fully usabled even with non-desktop devices such as tablets, mobile phones, as well as most of web browsers.

# The issue
Unfortunately, one of the plugin's most useful features - the "chord transpose" function - isn't working very well, as explained in [this post](https://wordpress.org/support/topic/serious-transpose-problem/) as well as other topics on the [plugin's official WP support forum](https://wordpress.org/support/plugin/wp-chords/). In a nutshell, the issue relies in how the plugin handles semi-tones: when you increase or decrease a semitone, flats and sharps don't overlap correctly: for example, `Bb` gets transposed into `A#` instead of `A`, thus making the whole transpose operation incorrect. This fork is meant to fix such behaviour by providing a proper semitone transposition.

# The fix
The transpose feature has been implemented on the client-side using `Vue.js`: however, since the original plugin doesn't have a public GitHub repository, I had no chance to properly fix the issue from within `Vue.js`: for this very reason I've just "hacked" the resulting JavaScript bundle, unobfuscating it using [this tool](https://lelinhtinh.github.io/de4js/) and replaced the 17-length chord list with a 12-length chord list, suppressing the flat chords and only leaving the sharp ones. Such modification fixed the transpose logic, yet also made the flat notation unusable. In order to put it back, I've added an `alt` property to each chord, so that I could decorate each sharp chord with its corresponding flat counterpart (Bb for A#, Gb for F#, and so on): this did the trick. The only major difference with the original plugin is that the "flat" notation (b) is automatically converted to its "sharp" counterpart (#), which in my opinion is a nice addition since it kind of "normalizes" the resulting chords chart.

# Credits
All credits go to Emre Polat, I've just fixed the transpose feature waiting for him to further improve his wonderful work. As soon as he'll release a fixed version of his ***WP Chords*** plugin there will no need to use/install this fork; If the author doesn't want to do that, I'll be more than happy to improve the plugin's source code myself - as long as it will be released to GitHub!

# References
* https://www.ryadel.com/en/wp-chords-plugin-worpdress-guitar
