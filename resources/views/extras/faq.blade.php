<h2><strong>PAQ:</strong></h2>
<h4>What's this for/What's the use for this?</h4>
<p>If you don't have access to your PC or Discord for jam1garner's discord bot to convert wav, you can use this website
    instead, as it converts the files on the server and sends it back to you. This can be used on school/college
    computers or on your phone.</p>

<h4>What's this meant for?</h4>
<p>Mostly for small stuff, like victory jingles, but you can get a BRSTM file off of Smash Custom Music (Archive), use
    the "Convert brstm/idsp/lopus" under "Extra Stuff", and then convert it to nus3audio (Don't forget to note down the
    BRSTM hz, loop start, and loop end from Smash Custom Music).</p>

<h4>Why did you make this?</h4>
<p>Because I got tired of connecting to my computer through Google's Remote Desktop just to make music mods at college
    (Also for me to easily make music mods on my phone). This also makes it easier for me to take pre-existing BRSTMs
    and convert them to a compatible nus3audio for Smash Ultimate.</p>

<h4>Why does the music file need to be at a sample rate of 48000hz?</h4>
<p>I'm not sure about this myself actually. If you really want to know, you can just go in the Smash Ultimate Modding
    Discord and ask there.</p>

<h4>Why is the file limit 100mb, and is there a limit on how long files are stored?</h4>
<p>1. The file limit is 100mb (with a bit of extra breathing space) because I only have 23GB free on the server I'm
    using.<br>
    2. Every 5 mins, the task schedular checks for files that are older than 30 mins. So at most, 34 mins, and at the
    least, 30 mins.
</p>

<h4>Where can I upload the file after I download it?</h4>
<p><a href="https://gamebanana.com/games/6498">Gamebanana.</a></p>

<h4>What does "Convert Song to Compatible wav" do?</h4>
<p>All it does is take the audio file, resamples it to 48000hz, and exports it as a wav.</p>

<h4>Why does "Convert brstm/idsp/lopus to Compatible wav" export the wav file to 48000hz instead of the original?</h4>
<p>Because I wanted it to automatically convert it to a compatible wav without uploading, downloading, then uploading it
    again. I was planning on making an option to directly convert the BRSTM to a nus3audio, but college.</p>

<h4>Does this work with an unmodded switch?</h4>
<p>Unfortunatly, we can't add custom music to smash offically yet (looking at you Nintendo). However, there's a great
    guide on modding your switch at <a href="https://switch.homebrew.guide/">Switch Hombrew Guide</a>, and a great Smash
    Ultimate modding guide on <a href="https://gamebanana.com/tuts/12827">Gamebanana made by TNN (That Nintendo
        Nerd)</a>.</p>

<h4>Is this a replacement for making music mods natively on your PC?</h4>
<p>Short Answer: No<br>Long Answer: Making music mods natively gives your more options and flexibilty than making it
    here. You have to factor in upload and download speed + not as much options as using cmd would give you.</p>

<h4>How are you converting music online?</h4>
<p>The website stores the file, then uses shell_exec to convert the file to lopus/idsp (if lopus/idsp was selected, it
    would return the file), then it injects it into a base nus3audio I have saved somewhere. For compatible wav, I store
    the file, then use shell_exec with SoX to resample the audio file, then return it. Right now, it's on a Windows
    Server, but once I figure out how to get VGAudio to work on a linux server, I'll move the server over there for more
    space, bandwidth, and speed at a cheaper price.</p>

<h4>Is this website only for audio?</h4>
<p>Right now, it's only audio, but I will work on adding more tools and making the website look nicer on my free time.
    My main goal was audio, but the only good domain name I could've thought of was smashultimatetools.com and that
    wasn't taken.</p>

<h4>I can't find the new FE songs and Byleth's victory theme?</h4>
<p>I'm gonna add the new FE songs and Byleth's victory theme to the list after I move my dump to my pc (or if someone
    sends me the file names).</p>

<h4>Where can I find this page's source code?</h4>
<p><a href="https://github.com/Coolsonickirby/smashultimatewebtools">Here.</a></p>

<h4>I have some questions, but they aren't answered here / There's an error in your website.</h4>
<p>Contact me on discord @ Coolsonickirby#4030.</p>