<?php
file_put_contents("testDirectory.txt", "povezalSEje");
?>
<HTML >
	<HEAD>
		<title>MSN Messenger Application Directory</title>
		<meta name="CODE_LANGUAGE" Content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
		<style type="text/css">
<!--
A.t
{
	font-family: Tahoma, Verdana, Arial;
	font-weight:bold;
	font-size:8pt;
	color:#5C5C5C;
	text-decoration: none;
	line-height: 12pt
}

A
{
	font-family: Tahoma, Verdana, Arial;
	font-size:8pt;
	color:#2F4A8F;
	text-decoration: none;
}

A:hover
{
	font-family: Tahoma, Verdana, Arial;
	font-size:8pt;
	color:#2F4A8F;
	text-decoration: underline;
}

.disclaimer
{
	font-family: Tahoma, Verdana, Arial;
	font-size:8pt;
	color:#2F4A8F;
	text-decoration: none;
}

.ns
{
	font-family: Tahoma, Verdana, Arial;
	font-size:8pt;
        color: red;
}

BODY { direction: ltr; }-->
</style>

		<script language="javascript">
		
var g_DaysToExpireCookie = 30;// [id, [Kids, MinUsers, MaxUsers]]
var g_AppInfo = new Array(

		[10331013, [1, 2, 2, ""]],
		[10331011, [1, 2, 2, ""]],
		[10331012, [1, 2, 2, ""]],
		[10331014, [1, 2, 2, ""]],
		[10331358, [1, 2, 2, ""]],
		[10331043, [1, 2, 2, ""]],
		[10331044, [1, 2, 2, ""]],
		[10331042, [1, 2, 2, ""]],
		[10331034, [1, 2, 2, ""]],
		[10331024, [1, 2, 2, ""]],
		[10331025, [1, 2, 2, ""]],
		[10331021, [1, 2, 2, ""]],
		[10331271, [1, 2, 2, ""]],
		[10331268, [1, 2, 2, ""]],
		[10331005, [1, 2, 2, ""]],
		[10331003, [1, 2, 2, ""]],
		[10331269, [1, 2, 2, ""]],
		[10331007, [1, 2, 2, ""]],
		[10331270, [1, 2, 2, ""]],
		[10331045, [1, 2, 2, ""]],
		[10331039, [1, 2, 2, ""]],
		[10331037, [1, 2, 2, ""]],
		[10331031, [1, 1, 1, ""]],
		[10331001, [1, 2, 2, ""]],
		[10331023, [1, 2, 2, ""]],
		[10331036, [1, 2, 2, ""]],
		[10331015, [1, 2, 2, ""]],
		[10331361, [1, 2, 2, ""]],
		[10331004, [1, 2, 2, ""]],
		[0, [0]]
);

		</script>
        <script language="javascript">
function GetCookieValue(name, defVal)
{
	var c = document.cookie;
	var i = c.indexOf(name + "=");
	if (i == -1) return defVal;
	i = i + name.length + 1;
	var end = c.indexOf(";", i);
	if (end == -1) end = c.length;
	return unescape(c.substring(i, end));		
}

function SetCookieValue(name, value)
{
	var d = new Date();
	d.setTime(d.getTime() + 1000 * 60 * 60 * 24 * g_DaysToExpireCookie);
	document.cookie = name + "=" + escape(value) + "; expires=" + d.toUTCString();
}

function GetUrlValue(name, defVal)
{
	var i = document.URL.toLowerCase().indexOf(name.toLowerCase() + "=");
	if (i == -1) return defVal;
	i = document.URL.indexOf("=", i) + 1;	
	var end = document.URL.indexOf("&", i);
	if (end == -1) end = document.URL.indexOf("#", i);
	if (end == -1) end = document.URL.length;
	return document.URL.substring(i, end);
}

function ShowHide(elem, fShow)
{
	if (fShow)
        elem.style.display = 'block';
	else
		elem.style.display = 'none';
}

function ShowHideRowsInRange(idStart, idEnd, fShow)
{
	var eRow = document.all[idStart];
	var iRow = eRow.rowIndex;
	var eTable = eRow.parentElement;
	while (eTable.tagName != 'TABLE')
	{
		eTable = eTable.parentElement;
	}
	do
	{
		ShowHide(eRow, fShow);
		iRow++;
		eRow = eTable.rows[iRow];
	} while (eRow != null && eRow.id != idEnd)
	ShowHide(eRow, fShow);
}

function ToggleCatShow(CatId)
{
	var id = "r" + CatId  + "s";
	var fShow = true;
	
	if (document.all[id].style != null && document.all[id].style.display != "none")
		fShow = false;
		
    if (CatId == 0 && fShow)
        UpdateFavUI();  // favs don't all show - only the defined ones do.
    else
    {
        ShowHideRowsInRange(id, "r" + CatId + "e", fShow);
        // v9 if (CatId != 0) SaveCatShowHideState(CatId, fShow);
    }
}

function GetCatCookieName()
{
    return "C" + GetUrlValue("k", 0);
}

/* save for V9
function SaveCatShowHideState(CatId, fShow)
{
    var aCatHiddenList;
    var cookieName = GetCatCookieName();

    if (GetCookieValue(cookieName) == null) 
        aCatHiddenList = new Array();
    else
        aCatHiddenList = GetCookieValue(cookieName).split(",");

    var fInHiddenList = (aCatHiddenList.join(",").match(CatId) != null);

    if (fShow != fInHiddenList) return;
    
    if (fShow) 
        aCatHiddenList = aCatHiddenList.join(",").replace(CatId + ",", "").replace("," + CatId, "").replace(CatId, "").split(",");
    else
        aCatHiddenList = aCatHiddenList.concat(CatId);

    SetCookieValue(cookieName, aCatHiddenList.join(","));
}

function HideHiddenCats()
{
    var i;
    var aCatHiddenList;
    var cookieName = GetCatCookieName();

    if (GetCookieValue(cookieName) == null) 
        aCatHiddenList = new Array();
    else
        aCatHiddenList = GetCookieValue(cookieName).split(",");

    for (i = 0; i < aCatHiddenList.length; i++) 
        ShowHideRowsInRange("r" + aCatHiddenList[i] + "s", "r" + aCatHiddenList[i] + "e", false);
} */

function SetFavLinkValues(eLink, sCookieValue, rowId)
{
	var aV = sCookieValue.split(",");
	eLink.href = "javascript:RA('" + aV[0] + "', '" + rowId + "');";
	eLink.title = unescape(aV[5]);
	eLink.innerText = unescape(aV[1]);
    if (aV.length > 6) {
        // icon URL
        eLink.parentElement.parentElement.children[0].children[0].src = unescape(aV[6]);
    }
}

function SetLinkFocus(e, cmd)
{
    for (i = 0; i < document.links.length; i++) 
    {
        if (document.links[i] == e) 
        {
            break;
        }
    }
    switch (cmd) {
    case "next":
        i++;
        break;

    case "prev":
        i--;
        break;
    }

    if (i < 0) 
        i = document.links.length - 1;
    else if (i >= document.links.length) 
        i = 0;

    e = document.links[i];
    if ((e.style.display != "none") && 
        (e.parentElement.style.display != "none") && 
        (e.parentElement.parentElement.style.display != "none")) 
    {
        e.focus();
    }
    else
    {
        SetLinkFocus(e, cmd);
    }
}

function OnKeyDownHandler()
{
    var e = window.event;

    switch (e.keyCode) {
    case 40:    // down
        SetLinkFocus(e.srcElement, "next");
        break;

    case 38:    // up
        SetLinkFocus(e.srcElement, "prev");
        break;

    case 32:    // space
        e.srcElement.click();
        break;
    }
}

function OnLoad()
{
    for (var i = 0; i < document.links.length; i++) 
    {
        document.links[i].onkeydown = OnKeyDownHandler;
    }
    UpdateFavUI();
    // v9 HideHiddenCats();
    // preload any images so we don't see layout changes if the images are slow to get
    var img = new Image();
    img.src = "images/line.gif";
    img.src = "images/spacer.gif";
    img.src = "images/defentry.png";
    img.src = "images/icon_star.png";
    img.src = "images/icon_arrow.png";

    try {
        window.external.Initialize();   // tell the client we are done loading.
    }
    catch(e)
    {
        window.status = "Initialize would have been called.";
    }
}

function GetFavsCookieNamePrefix()
{
    return "F" + GetUrlValue("k", 0) + "-" + GetUrlValue("L", "en-US");
}

function UpdateFavUI()
{
	if (document.all["cid0"] != null)
	{
		var cookieName = GetFavsCookieNamePrefix();
		var aC = new Array(
			GetCookieValue(cookieName + 1, "0"),
			GetCookieValue(cookieName + 2, "0"),
			GetCookieValue(cookieName + 3, "0"));
		if (aC[0] == 0)
			ShowHideRowsInRange("cid0", "r0e", false);	
		else
		{
			ShowHideRowsInRange("cid0", "r0e", true);
			for (var i = 0; i < 3; i++)
			{
				SetFavLinkValues(document.all["a-" + (i+1)], aC[i], -(i+1));
				ShowHide(document.all["r-" + (i+1)], aC[i] != 0);
			}
		}
	}
}

function AddIdToFavorites(id, Name, Kids, MinUsers, MaxUsers, Desc, iconUrl)
{
	var cookieName = GetFavsCookieNamePrefix();
	var aFavs = new Array(
		GetCookieValue(cookieName + 1, "0").split(","), 
		GetCookieValue(cookieName + 2, "0").split(","), 
		GetCookieValue(cookieName + 3, "0").split(",")
		);
	// if the same id is already a fav, delete it and shift the others up
	var i;
	for (i=0; i < 2; i++)
	{
		if (aFavs[i][0] == id)
		{
			var j;
			for (j=i; j < 2; j++)
			{
				aFavs[j] = aFavs[j+1];
			}
			aFavs[3] = "0".split(",");
		}
	}
	// now insert the new fav and shift the others down
	SetCookieValue(cookieName + 1, new Array(id, escape(Name), Kids, MinUsers, MaxUsers, escape(Desc), escape(iconUrl)).join(","));
	SetCookieValue(cookieName + 2, aFavs[0].join(","));
	SetCookieValue(cookieName + 3, aFavs[1].join(","));
	UpdateFavUI();
}

function RA(id, rowId)
{
	var appMinUsers;
	var appMaxUsers;
	var appKids;
	var appName;
	var appDesc;
	var SubscriptionURL;

	if (id > 0)
	{
		var i;
		for (i = 0; g_AppInfo[i][0] > 0; i++)
		{
			if (id == g_AppInfo[i][0])
			{
				var aInfo = g_AppInfo[i];
				appKids = aInfo[1][0];
				appMinUsers = aInfo[1][1];
				appMaxUsers = aInfo[1][2];
				SubscriptionURL = aInfo[1][3];
				break;
			}
		}	

        // Layout dependent code! - first cell of row has img
        //var iconUrl = "images/spacer.gif"; // document.all["r" + rowId].children[0].children[0].src;
        var iconUrl = document.all["r" + rowId].children[0].children[0].src;

        var eLink = document.all["a" + rowId];
		appName = eLink.innerText;
        var title = eLink.title;
		AddIdToFavorites(id, appName, appKids, appMinUsers, appMaxUsers, title, iconUrl);
	} else { // fav id
		var aFav = GetCookieValue(GetFavsCookieNamePrefix() + id, "0").split(",");
		id = aFav[0];
		appName = unescape(aFav[1]);
		appKids = aFav[2];
		appMinUsers = aFav[3];
		appMaxUsers = aFav[4];
	}
	try
	{
		var Ex = window.external;
		if(FindClientVersion() >= 6.1)
		{		
			Ex.StartApp2(appName, id, appMaxUsers, appMinUsers, appKids, SubscriptionURL);
		}
		else
		{			
			Ex.StartApp(appName, id, appMaxUsers, appMinUsers, appKids);
		}
	} catch(e) 
	{
		window.status = "RunApp(" + appName + ", " + id + ", " + appMaxUsers + ", " + appMinUsers + ", " + appKids + ")";	
	}
}

function FindClientVersion()
{
	var cstrVersion = "Version";
	// find the query string (URL string after the '?' char
	var query = document.location.search.substring(1);
	// search the query string for the "Version" paramenter    	
	var index = query.indexOf(cstrVersion);
	// get the string at the end of the version parameter + 1 (skip '=' character)
    var value = query.substring(index + cstrVersion.length + 1);
    // return what is after the '=' character and before the '&'
    var iend = value.indexOf('&');
    if(iend <= 0)    
		return value;
	else
		return value.substring(0, iend);

}
</script>

	</HEAD>
	<body oncontextmenu="return false;" onLoad="OnLoad();" scroll="auto" leftmargin="8" topmargin="10">
      <table cellspacing="0" cellpadding="0" width="201" height="100%" border="0">
	    <tr id="cid10330050" ><td colspan=3><a href="#" class="t" title="" onClick="ToggleCatShow(10330050);" width=100%>Join the Instant Games Clubhouse</a></td></tr>
<tr id="r10330050s" ><td colspan=3 height=4><img src="images/spacer.gif"></td></tr>
<tr ><td colspan=3 height=2 background="images/line.gif"></td></tr>
<tr id="r10331013" ><td valign="top" width=18 height=12><img src="images/icon_star.png"></td><td width=100% colspan=2><a id="a10331013" href="javascript:RA('10331013', '10331013')" title="Play the popular game show against your friends right within the conversation window!">Wheel of Fortune</a></td></tr>
<tr id="r10331011" ><td valign="top" width=18 height=12><img src="images/icon_star.png"></td><td width=100% colspan=2><a id="a10331011" href="javascript:RA('10331011', '10331011')" title="Play a game of billiards against your friends right within the conversation window!">Bankshot Billiards Club</a></td></tr>
<tr id="r10331012" ><td valign="top" width=18 height=12><img src="images/icon_star.png"></td><td width=100% colspan=2><a id="a10331012" href="javascript:RA('10331012', '10331012')" title="Play a game of chess against your friends right within the conversation window!">Chess Club</a></td></tr>
<tr id="r10331014" ><td valign="top" width=18 height=12><img src="images/icon_star.png"></td><td width=100% colspan=2><a id="a10331014" href="javascript:RA('10331014', '10331014')" title="Play the 3-Dimensional word game that really stacks up!">Upwords&#174; Club</a></td></tr>
<tr id="r10330050e"><td colspan=3 height=1><img src="images/spacer.gif"</td></tr>
<tr><td colspan=3 height=16><img src="images/spacer.gif"</td></tr>
<tr id="cid10330075" ><td colspan=3><a href="#" class="t" title="" onClick="ToggleCatShow(10330075);" width=100%>Play a Featured Game</a></td></tr>
<tr id="r10330075s" ><td colspan=3 height=4><img src="images/spacer.gif"></td></tr>
<tr ><td colspan=3 height=2 background="images/line.gif"></td></tr>
<tr id="r10331358" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331358" href="javascript:RA('10331358', '10331358')" title="">Tic Tac Toe Classic</a></td></tr>
<tr id="r10330075e"><td colspan=3 height=1><img src="images/spacer.gif"</td></tr>
<tr><td colspan=3 height=16><img src="images/spacer.gif"</td></tr>
<tr id="cid10330100" ><td colspan=3><a href="#" class="t" title="" onClick="ToggleCatShow(10330100);" width=100%>Start an MSN Instant Game with a Friend</a></td></tr>
<tr id="r10330100s" ><td colspan=3 height=4><img src="images/spacer.gif"></td></tr>
<tr ><td colspan=3 height=2 background="images/line.gif"></td></tr>
<tr id="r10331043" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331043" href="javascript:RA('10331043', '10331043')" title="Challenge your friend to a game of Jewel Quest. Swap ancient archaeological relics to line up three in a row and transform sandy tiles into gold.">Jewel Quest</a></td></tr>
<tr id="r10331044" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331044" href="javascript:RA('10331044', '10331044')" title="Challenge your friend to a game of Mah Jong Quest. Remove matching tiles from the board in your quest to reach the golden Yin and Yang tiles before time runs out.">MahJong Quest</a></td></tr>
<tr id="r10331042" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331042" href="javascript:RA('10331042', '10331042')" title="Challenge your friend to a strategic game of Quarto.  Your goal is to make a line of pieces that all share a common attribute but your opponent gets to choose which piece you will play on the board.">Quarto</a></td></tr>
<tr id="r10331034" ><td valign="top" width=18 height=12><img src="images/icon_arrow.png"></td><td width=100% colspan=2><a id="a10331034" href="javascript:RA('10331034', '10331034')" title="Backgammon is a two-player board game with pieces called checkers. The object of the game is to move all your checkers off the table first. As you roll dice and move your checkers, try not to leave one of them without another on top of it. Your opponent can land on that checkers and send it to the bar, which is the farthest position back on the board.">Backgammon</a></td></tr>
<tr id="r10331024" ><td valign="top" width=18 height=12><img src="images/icon_arrow.png"></td><td width=100% colspan=2><a id="a10331024" href="javascript:RA('10331024', '10331024')" title="Play this exciting Poker game with your friends right within the conversation window!">7 Hand Poker</a></td></tr>
<tr id="r10331025" ><td valign="top" width=18 height=12><img src="images/icon_arrow.png"></td><td width=100% colspan=2><a id="a10331025" href="javascript:RA('10331025', '10331025')" title="Enjoy a game of Mah Jong Tiles right within the conversation window!">Mah Jong Tiles</a></td></tr>
<tr id="r10331021" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331021" href="javascript:RA('10331021', '10331021')" title="Play a game of Tic Tac Toe with your friends right within the conversation window!">Tic Tac Toe</a></td></tr>
<tr id="r10331271" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331271" href="javascript:RA('10331271', '10331271')" title="Play the exciting puzzle game that has taken the Internet by storm.">Polar Express Bejeweled</a></td></tr>
<tr id="r10331268" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331268" href="javascript:RA('10331268', '10331268')" title="Challenge your buddy to a game of Checkers.">Checkers</a></td></tr>
<tr id="r10331005" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331005" href="javascript:RA('10331005', '10331005')" title="Explore a whole new dimension of fun!">Cubis</a></td></tr>
<tr id="r10331003" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331003" href="javascript:RA('10331003', '10331003')" title="Play the game that is taking the Internet by storm!">Hexic</a></td></tr>
<tr id="r10331269" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331269" href="javascript:RA('10331269', '10331269')" title="Play a head-to-head version of classic Minesweeper.">Minesweeper Flags</a></td></tr>
<tr id="r10331007" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331007" href="javascript:RA('10331007', '10331007')" title="Create colorful paths before time runs out!">Mozaki Blocks</a></td></tr>
<tr id="r10331270" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331270" href="javascript:RA('10331270', '10331270')" title="Finally, the Windows classic in head-to-head form.">Solitaire Showdown</a></td></tr>
<tr id="r10330100e"><td colspan=3 height=1><img src="images/spacer.gif"</td></tr>
<tr><td colspan=3 height=16><img src="images/spacer.gif"</td></tr>
<tr id="cid10330200" ><td colspan=3><a href="#" class="t" title="" onClick="ToggleCatShow(10330200);" width=100%>Share Fun Activities</a></td></tr>
<tr id="r10330200s" ><td colspan=3 height=4><img src="images/spacer.gif"></td></tr>
<tr ><td colspan=3 height=2 background="images/line.gif"></td></tr>
<tr id="r10331045" ><td valign="top" width=18 height=12><img src="images/icon_star.png"></td><td width=100% colspan=2><a id="a10331045" href="javascript:RA('10331045', '10331045')" title="Ever wanted to know what's going to happen before it actually occurs? View online episodes about ESP Billy, a white trash online psychic.">ESP Billy</a></td></tr>
<tr id="r10331039" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331039" href="javascript:RA('10331039', '10331039')" title="Play a virtual instrument with your IM conversation.">Music Man</a></td></tr>
<tr id="r10331037" ><td valign="top" width=18 height=12><img src="images/icon_arrow.png"></td><td width=100% colspan=2><a id="a10331037" href="javascript:RA('10331037', '10331037')" title="Find a shared activity with your friend.">Virtual Earth Shared Map</a></td></tr>
<tr id="r10331031" ><td valign="top" width=18 height=12><img src="images/icon_star.png"></td><td width=100% colspan=2><a id="a10331031" href="javascript:RA('10331031', '10331031')" title="Create your own Reality TV promo! Choose from three available storylines, then customize your cast of characters with your own photos and finally share your masterpiece with a friend.">Reality Fame</a></td></tr>
<tr id="r10331001" ><td valign="top" width=18 height=12><img src="images/icon_arrow.png"></td><td width=100% colspan=2><a id="a10331001" href="javascript:RA('10331001', '10331001')" title="">MSN Photo Swap</a></td></tr>
<tr id="r10331023" ><td valign="top" width=18 height=12><img src="images/icon_arrow.png"></td><td width=100% colspan=2><a id="a10331023" href="javascript:RA('10331023', '10331023')" title="Audio chat with your friends in a whole new way with sound clips, backgrounds, display pictures and emoticons from exciting Miles Thirst! Brought to you by Sprite.">Miles Thirst: The Conversationator</a></td></tr>
<tr id="r10331036" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331036" href="javascript:RA('10331036', '10331036')" title="Send and discuss top news stories from msnbc.com">MSNBC.com IM News</a></td></tr>
<tr id="r10331015" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331015" href="javascript:RA('10331015', '10331015')" title="Set up a time to get together with your friends.">MSN Calendar Sharing</a></td></tr>
<tr id="r10331361" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331361" href="javascript:RA('10331361', '10331361')" title="Check out trailers for the latest movies, times, and more.  Brought to you by MSN Entertainment.">Movie Trailers &amp; More</a></td></tr>
<tr id="r10331004" ><td valign="top" width=18 height=12><img src="images/defentry.png"></td><td width=100% colspan=2><a id="a10331004" href="javascript:RA('10331004', '10331004')" title="Share a smile, a kiss or a LOL with Xpress Greetings from AmericanGreetings.com.">Xpress Greetings</a></td></tr>
<tr id="r10330200e"><td colspan=3 height=1><img src="images/spacer.gif"</td></tr>
<noscript class="ns">Your browser's current security settings will not allow you to use Fun & Games. To use Fun & Games, set your browser security to medium or low, and be sure cookies and scripting are enabled.</noscript><tr><td colspan=3 height=16><img src="images/spacer.gif"</td></tr>
<tr id="cid0" style="{display: none}"><td colspan=3><a href="#" class="t" title="Fun &amp; Games activities you have launched recently" onClick="ToggleCatShow(0);" width=100%>Recently Played</a></td></tr>
<tr id="r0s" style="{display: none}"><td colspan=3 height=4><img src="images/spacer.gif"></td></tr>
<tr style="{display: none}"><td colspan=3 height=2 background="images/line.gif"></td></tr>
<tr id="r-1" style="{display: none}"><td valign="top" width=18 height=12><img src=""></td><td width=100% colspan=2><a id="a-1" href="javascript:RA('-1', '-1')" title=""></a></td></tr>
<tr id="r-2" style="{display: none}"><td valign="top" width=18 height=12><img src=""></td><td width=100% colspan=2><a id="a-2" href="javascript:RA('-2', '-2')" title=""></a></td></tr>
<tr id="r-3" style="{display: none}"><td valign="top" width=18 height=12><img src=""></td><td width=100% colspan=2><a id="a-3" href="javascript:RA('-3', '-3')" title=""></a></td></tr>
<tr id="r0e"><td colspan=3 height=1><img src="images/spacer.gif"</td></tr>
<tr><td colspan=3 height=100%><img src="images/spacer.gif"</td></tr>

      </table>
	</body>
</HTML>