<?php
/*require('./Code/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<div class="container">

<table class="responsive">
   <h3 class="title">&#10003; Codified Documents &nbsp; &nbsp; &#10003; Structured Relationships  &nbsp; &nbsp; &#10003; Ready for Personal Data Stores</h3>
     
   <p>Legal systems can be codified as "objects" in a "graph."
<br/><br/>
    <table class="table table-striped table-condensed table-bordered" style="padding:20px">

<tr>
<td><img src="http://cdns2.freepik.com/free-photo/group--persons-outline--ios-7-interface-symbol_318-35219.jpg" height="50px"/></td>
<td width="30p"><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=core/id/>id</a></td>
				 <td>People come first.  They have relationships, own things, are places.</td>
</tr>

<tr>
<td><img src="https://cdn0.iconfinder.com/data/icons/seo-smart-pack/128/grey_new_seo2-31-512.png" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=core/ids/>ids</a></td>
				 <td>ID<u>s</u> are combinations of persons.  Parties to a contract.  Suppliers, customers.  Employees, board members, agents, subsidiaries.  Regulators.  Friends with whom you share something important.</td></tr>

<tr>
<td><img src="http://be-my-guest.com/static/img/things-to-do-icons.png" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=core/re/>re</a></td>
<td>"Re" is for things.  Mostly things that a person can own or sell, license, borrow or otherwise exchange.  /auto, /ip/patent/, /real, etc.  To be tied with registration systems such as deed registries, DMVs, patent offices, etc.</td></tr>

<tr>
<td><img src="http://images.clipartpanda.com/world-map-clip-art-worldmap.gif" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=core/at/>at</a></td>
<td>"At" is for places.   1 Broadway, Cambridge MA, USA becomes at/usa/ma/middlesex/cambridge/broadway/1/geo.</td></tr>

<tr>
<td><img src="http://www.lakelocal.org/forms/PublishingImages/forms-icon.jpg"height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=core/gov/>gov</a></td>
   <td>Government forms.  Applications, permits, reports. Linked to codes, regulations and laws.  Adjacent to at/ and /form.</td>
</tr>

<tr>
<td><img src="http://www.lakelocal.org/forms/PublishingImages/forms-icon.jpg" height="50px"></td>
				 <td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=core/form/>form</a></td><td>Forms are templates, model documents, boilerplate and other codified text.  Contracts, permits, pleadings, adaptations for particular jurisdictions and the like.</td>
</tr>

<tr>
<td><img src="http://www.lakelocal.org/forms/PublishingImages/forms-icon.jpg"height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=doc/>doc</a></td><td>Docs are events in a legal system.  Making an application, granting a permit, signing a deal, sending a draft.  Each is a connection between some persons, a form and a history. History is the chain of events, the succession of documents.</td>
</tr>
	</table>
	</table>
<style>
	#filelist { 
		display: none;
	}
</style>
