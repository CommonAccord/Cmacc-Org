Model.Root.Note=This page presents the key=value pairs, (aka properties) in the order that they are used in rendering.  Normally, they are presented in the order of most recent to oldest, as new is usually added at the top. But for a first-time reading, it is helpful to see how the page is built.  

Model.Root=<center>{Logo}<br><br><b>{Site.Name}</b></center></p><br>{Content.Sec}

Logo=<img src="image/cmacc-trans.png" style="width:35%" />

Site.Name=CommonAccord.Org

Content.Sec=<table><tr><td width="50%">{Intro.Sec}</td><td>   </td><td valign="top"><b>Some Links:</b><br><a name="unchain-the-chain" title="financialcryptography.com" href="http://financialcryptography.com/mt/archives/001556.html"><img alt="Ian Grigg - Ricardian Contracts" src="https://pbs.twimg.com/media/CfJnq7BXIAEWwgm.jpg:small"></a><br><a href="https://cmacc-slack-add.herokuapp.com/">join commonaccord.slack.com</a><br>{TwitterBlock.sec}<br><br><b><a href="https://github.com/CommonAccord/Cmacc-Org/commits/master">Latest Activity on GitHub</a></b><br><br>{DocumentsFolder.sec}<br>{SubjectIndex.Sec}<br>{RecentWork.Sec}</td></tr></table>

Intro.Sec={Introduction.sec}<br><br>{SiteLinks.Sec}

Introduction.sec=<b>Overview:</b><ul><li>{Slack.sec} &emsp; {Blog.sec}<li>{CmAQuick.sec}<li>{CmAbqc.sec}<li>{Codification.sec}<li>{Code-ification.sec}</ul>

CmAQuick.sec=CommonAccord is an initiative to create global codes of legal transacting by codifying and automating legal documents, including contracts, permits, organizational documents, and consents.  We anticipate that there will be codes for each jurisdiction, in each language.  For international dealings and coordination, there will be at least one "global" code.  {CDL.Link} 

CmAbqc.sec=One proposed implementation of CommonAccord is a universal bank account that would allow people to manage in a portable account all types of transactions rather than just payments. Examples of how it would look like can be found here: {Bqc.Link}. An interview explaining the concept can be found here (in French - minute 24.21): {BfmPodcast.Link}.

Conference.sec=We are co-organizing a conference at MIT Media Lab - May 23-24: <a href="https://docs.google.com/document/d/1nG78OfVcCfI_WtxpLlz5Y_8wyTaksGl9jKGCKz0aSxo/edit#">Conference Program</a>

Slack.sec=<a href="https://cmacc-slack-add.herokuapp.com/">Join our Slack group!</a>

Blog.sec=<a href="http://commonaccord.wordpress.com">CommonAccord.Wordpress.com</a>

Codification.sec=Codification of legal form documents makes them transparent and continuously improving.  It is part of the tradition of legal codification - from Hammurabi through Napoleon, the UCC, the ALI, and Creative Commons.  Codification demystifies law and encourages <a href="http://p2pfoundation.net/Common_Accord">transparency and autonomy</a>.

Code-ification.sec={Code-ify.sec}<li>{PDS.sec}<li>{Synchronization.sec}<li>{OnGitHub.sec}<li> {InfoLinks.sec} <li>{CDL.sec}

Code-ify.sec=We "code-ify" them by treating them like software source code - files in folders shared on GitHub.  Code-ifying is neither hard nor complicated.  The infrastructure is robust, widely-used, and free.  The form documents will converge into legal codes of transacting.


PDS.sec=The legal code is part of a "distributed data model" for transacting.  Each participant has their own files stating their legal relationships and transaction histories with each of their partners.  The files are private, under their control, shared and handled exactly as they want.  In this respect, it is like conventional, custom legal documents done in word-processing by lawyers. 

Synchronization.sec=Participants transact by synchronizing files with partners. Synchronization can be done by git, blockchain, or any other method that the parties find satisfactory (even email).  <a href="http://www.linuxfoundation.org/news-media/announcements/2015/12/linux-foundation-unites-industry-leaders-advance-blockchain">Blockchain is a particularly important fit.</a>  Blockchain "smart contracts" can automate routine transaction functions while the legal text provides a frame for legal enforceability. 

OnGitHub.sec=All of the text, and the little bit of code that brings it together, is on <a href="http://github.com/CommonAccord/Cmacc-Org">GitHub</a>.

InfoLinks.sec={ParserByPrimavera.sec} {Peer2Peer.sec} {XrayView.sec} {Slashdot.sec} {Technical.sec}

ParserByPrimavera.sec=This website uses a parser done by <a href="https://cyber.law.harvard.edu/people/pdefilippi">Primavera De Filippi</a> of Harvard's Berkman Center.

Peer2Peer.sec=It supports a <a href="index.php?action=doc&file=S/About/Pitch/Support/DRY_Transacting_v0.md">"DRY," peer-to-peer transaction model</a>, including with <a href="http://hardjono.mit.edu/sites/default/files/documents/CommonAccord_Provenance_11182015.pdf">blockchain and UMA (pdf)</a>.  There can be  <a href="http://financialcryptography.com/mt/archives/001556.html">close coupling of "smart contracts" and contract text</a>, enabling <a href="http://iang.org/ricardian/">"Ricardian" contracts</a>.

XrayView.sec=A taste of the "experience" can be seen  in this <a href="https://www.youtube.com/watch?v=4ZfsyTPYFIA">YouTube video</a>.

Slashdot.sec=The vision was articulated in an <a href="http://news.slashdot.org/story/13/07/25/1814255/attorney-jim-hazard-is-working-to-open-source-law-video"> OSCON interview with Slashdot</a>.

CDL.sec=We are working toward a "{CDL.Link}," a trustee for global legal code.  The project is open source. You can contribute: as a lawyer to legal documents, as a coder to our software, as a platform by interfacing with our materials, as a business by using the system, as a benefactor by supporting the effort.  <a href="http://github.com/commonaccord/cmacc-org">Contribute on GitHub</a> or <a href="mailto:commonaccord@gmail.com?Subject=Contact" target="_top">email commonaccord@gmail.com.</a>

Technical.sec=The files can also be expressed as <a href="http://www.commonaccord.org/index.php?action=ipld&file=Dx/Acme_FR/04-NDA-From-Quake-FR/Doc_v0.md">JSON/IPLD</a>.

SiteLinks.Sec=<b>Site links:</b><ul type=none><li>{DocumentsFolder.sec}<li>{Views.List.sec}<li>{PageSource.sec}<li>{MITConference.sec}</ul>

Views.List.sec=Each file on the site has six "views": <a href="index.php?action=source&file=Dx/Acme_UK/01-EU-US-DataTransfer/Doc_v0.md">Source</a>.  E.g., click on <a href="index.php?action=doc&file=Dx/Acme_UK/01-EU-US-DataTransfer/Doc_v0.md">"Document"</a>.

PageSource.sec=This page is made using the tool ("dog fooding" in tech parlance): <a href="index.php?action=source&file=S/About/Landing.md">Landing Page Source</a>.

MITConference.sec=<a href="index.php?action=doc&file=S/About/Conference/Flyer/0.md">Conference</a>

CDL.Link=<a href="index.php?action=doc&file=S/About/CDL/0.md">Center for Decentralized Law</a>  

Bqc.Link=<a href="http://www.commonaccord.org/index.php?action=list&file=/bqc/fr/bnpp/a5we/">Universal bank account</a>

BfmPodcast.Link=<a href="http://bfmbusiness.bfmtv.com/mediaplayer/audio/bfm-1106-atelier-numerique-16h-17h-340233.html">Interview BFM</a>

DemoDocName=Dx/Acme_UK/01-EU-US-DataTransfer/Doc_v0.md

DocumentsFolder.sec=<a href="index.php?action=list&file=/">Top level</a> folder of files.

SubjectIndex.Sec=<a href="index.php?action=list&file=/S/Index/">Subject Index</a> of (some) materials.

RecentWork.=[S/About/RecentWork/0.md]

TwitterBlock.sec=<a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096" width="600" height="300">Tweets by @CommonAccord</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

TwitterBlock.sec=<a class="twitter-timeline" href="https://twitter.com/CommonAccord/with_replies" data-widget-id="574817616360964096" width="600" height="300">Tweets by @CommonAccord</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>