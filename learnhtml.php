<?php include 'indexheader.php'; ?>
 
<head profile="http://gmpg.org/xfn/11">
 
<style type="text/css">
/* placeholder inline styles */
 
body { font-family: arial, verdana; }
 
a,
a img { text-decoration: none; }
 
ul.youtubeFeed {
margin: 0;
padding: 0;
}
 
ul.youtubeFeed li {
float: left;
width: 150px;
list-style-type: none;
font-size: 11px;
height: 170px;
}
 
ul.youtubeFeed li div { width: 118px; }
</style>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
 
<script type="text/javascript">
google.setOnLoadCallback(function () {
// setup the click handler
function loadVideo(video) {
 
$('#videos h3').text(video.title);
 
$('#youtubeVideo').html([
'<iframe title="', video.title, '" width="560" height="349" src="', video.href, '" frameborder="0" allowfullscreen></iframe>'
].join(""));
return false;
}
 
// get the feed info
// setting max-results delivers you the maximum of 50, you can remove to default to 25. Use feed.setNumEntries to strip down to a range between 50 and 25.
var feedUrl = "http://gdata.youtube.com/feeds/api/playlists/PL081AC329706B2953?max-results=50";
new google.feeds.lookupFeed(feedUrl, function (result) {
if (result.error || !result.url) {
$('#videocomm').hide();
return;
}
// get the feed items
var feed = new google.feeds.Feed(result.url);
feed.setNumEntries(50);	
feed.load(function (result) {
// write out the feed data
var container = $(".youtubeFeed");
//var totalcount = result.feed.entries.length;
//alert (totalcount);
 
for (var i = 0; i < result.feed.entries.length; i++) 
{
var entry = result.feed.entries[i];
var vidhash = /=(.*)&(.*)$/.exec (entry.link)[1];
// uncomment this and comment out the item below if you find rendering of the player a bit slow
// container.append('<li><div><a href="http://www.youtube.com/v/'+vidhash+'&feature=youtube_gdata&rel=1" class="yt-vid-link" title="'+entry.title+'"><img src="http://img.youtube.com/vi/'+vidhash+'/2.jpg" /><br />'+entry.title+'</a></div></li>\n');
 
// comment the item below and uncomment the item above if you find the player swap too slow
container.append('<li><div><a href="http://www.youtube.com/embed/'+vidhash+'" class="yt-vid-link" title="'+entry.title+'"><img src="http://img.youtube.com/vi/'+vidhash+'/2.jpg" /><br />'+entry.title+'</a></div></li>\n');
}
// load the first video
$(".yt-vid-link:first").each(function () {
loadVideo(this);
return false;
});
// setup the click handler for all the videso
$(".yt-vid-link").click(function () {
loadVideo(this);
return false;
});
});
});
});
google.load("feeds", "1");
</script>
 
</head>
 
<body>
 
<div id="videos">
 
<div id="videocomm">
 
<h3>Please Wait....</h3>
 
<div id="youtubeVideo">
 
Insert video here
 
</div>
 
<p>Click a thumbnail below to watch the video.</p>
 
<div class="slider">
 
<div id="fragment-1">
 
<ul class="youtubeFeed">
 
</ul>
 
</div>
 
</div>
 
</div>
 
</div>
 
</body>
</html> 