# MapBBCode MOD for phpBB 3

Since I have written a MOD for phpBB 2, it seemed logical to update it for the latest
version of that forum engine. This modification is tested on phpBB 3.0.8, .10 and .12.
It doesn't affect many files, and doesn't rely on lines that are likely to be modified
by other MODs.

## Installation

1. Install [AutoMOD](https://www.phpbb.com/customise/db/official_tool/automod/) (there are instructions in FAQ).
2. Log in to your forum as administrator, open "AUTOMOD" tab and upload `mapbbcode_mod.zip` with the field at the bottom. You can get the latest package [here](https://github.com/MapBBCode/mapbb-phpbb3/raw/master/dist/mapbbcode_mod.zip).
3. Disregard version warning if there is one, and press "Install". Then press buttons you're asked to. You might be asked to upload files yourself.
4. After installing, open `%FORUM%/install_mapbbcode.php`. Press "Submit", "OK" and after everything's green, return to the forum.
5. Check that [map] bbcode works, and there is an administration panel in "Messages" tab.

## Upgrading

1. Open AutoMOD control panel and upload fresh `mapbbcode_mod.zip`.
2. Find it in the list, click "Details", check version (N.M.P) and find "Upgrade N.M.P to (latest)" contrib module.
3. Install it.
4. If needed, run `install_mapbbcode.php` (see above), or just purge the cache (it's an option on "General" tab).

## Add-ons and proprietary Layers

If you want to use plugins or proprietary layers, like Google's, you'll have to modify two files:

* `includes/functions_mapbbcode.php`
* `mapbbcode/mapbbcode_window.html`

Just add needed scripts there. There are examples in `functions_mapbbcode.php`.

## License

Sadly I could not slap my regular WTFPL stamp on it, since files affected are under GPLv2. Well, it is GPLv2 then, unlike the javascript library.
