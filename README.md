# MapBBCode MOD for phpBB 3

Since I have written a MOD for phpBB 2, it seemed logical to update it for the latest
version of that forum engine. This modification is tested on phpBB 3.0.8, .10 and .12.
It doesn't affect many files, and doesn't rely on lines that are likely to be modified
by other MODs.

## Installation

1. Install [AutoMOD](https://www.phpbb.com/customise/db/official_tool/automod/) (there are instructions in FAQ).
2. Log in to your forum as administrator, open "AUTOMOD" tab and upload `mapbbcode_mod.zip` with the field at the bottom. You can get the latest package [here](https://github.com/MapBBCode/mapbb-phpbb3/raw/master/dist/mapbbcode_mod.zip).
3. Disregard version warning if there is one, and press "Install". Then press buttons you're asked to. You might be asked to upload files yourself.
4. After installing, open `%FORUM%/install_mapbbcode/php`. Press "Submit", "OK" and after everything's green, return to the forum.
5. Check that [map] bbcode works, and there is an administration panel in "Messages" tab.

## License

Sadly I could not slap my regular WTFPL stamp on it, since files affected are under GPLv2. Well, it is GPLv2 then, unlike the javascript library.
