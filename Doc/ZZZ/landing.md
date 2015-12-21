Model.Root.Note=This page presents the key=value pairs, (aka properties) in the order that they are used in rendering.  Normally, they are presented in the order of most recent to oldest, as new is usually added at the top. But for a first-time reading, it is helpful to see how the page is built.  

Model.Root=<p align="center">{Logo}<br><br><b>{Site.Name}</b></center></p><br>{Content.Sec}

Logo=<img src="File/cmacc-trans.png" style="width:35%" />

Site.Name=CommonAccord.Org

Content.Sec=<table><tr><td width="50%">{Intro.Sec}</td><td>   </td><td>{TwitterBlock.sec}<br><br>{RecentWork.Sec}</td></tr></table>

Intro.Sec={Introduction.sec}<br><br>{SiteLinks.Sec}

Introduction.sec=<b>Overview:</b><ul type=none><li>{OnGitHub.Sen}<li> {ParserByPrimavera.Sen} <li>{Peer2Peer.Sen} <li>{DeCenter.Sen}<li>{XrayView.Sen}</ul>

OnGitHub.Sen=All of the text, and the little bit of code that brings it together, is on <a href="http://github.com/CommonAccord/Cmacc-Org">GitHub</a>.

ParserByPrimavera.Sen=This website uses a parser done by <a href="https://cyber.law.harvard.edu/people/pdefilippi">Primavera</a>.

Peer2Peer.Sen=It supports a <a href="index.php?action=doc&file=S/About/Pitch/Support/DRY_Transacting_v0.md">"DRY," peer-to-peer transaction model</a>, including with <a href="http://hardjono.mit.edu/sites/default/files/documents/CommonAccord_Provenance_11182015.pdf">blockchain and UMA (pdf)</a>. 

DeCenter.Sen=We are working toward a "<a href="index.php?action=doc&file=S/About/Pitch/Support_v0.md">Center for Decentralized Law</a>.

XrayView.Sen=A taste of the "experience" of working this way can be seen  in this <a href="https://www.youtube.com/watch?v=4ZfsyTPYFIA">YouTube video</a>.

SiteLinks.Sec=<b>Site links:</b><ul type=none><li>{DocumentsFolder.sec}<li>{Views.List.sec}<li>{PageSource.sec}</ul>

DocumentsFolder.sec=Top level <a href="index.php?action=list&file=/">folder of files</a>.

Views.List.sec=Each file on the site has six "views": <a href="index.php?action=source&file=Dx/Acme_UK/01-EU-US-DataTransfer/Doc_v0.md">Source</a>.  E.g., click on <a href="index.php?action=doc&file=Dx/Acme_UK/01-EU-US-DataTransfer/Doc_v0.md">"Document"</a>.

PageSource.sec=This page is made using the tool ("dog fooding" in tech parlance): <a href="index.php?action=source&file=ZZZ/landing.md">Landing Page Source</a>.
  
DemoDocName=Dx/Acme_UK/01-EU-US-DataTransfer/Doc_v0.md

RecentWork.=[S/About/RecentWork/0.md]

TwitterBlock.sec=<a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096" width="600" height="300">Tweets by @CommonAccord</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

TwitterBlock.sec=<a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096" width="600" height="300">Tweets by @CommonAccord</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>