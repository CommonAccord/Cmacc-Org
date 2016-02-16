Ti=Section

1.sec=The sections of a Contract (and many other documents) are an outline.  An outline is sections, with the possibility of subsections, recursively.  So the fundamental building block of an outline is a Section.

2.0.sec=Most Sections in legal documents can be understood as some combination of four parts: Title, Intro, a list of subsections, and an Extro (sorry).  Many Sections are simpler than this, very few are more complicated.  We have created a kit that builds this in the following way:

2.1.sec=A "Sec"=&#60;b>&#123;Ti}&#60;/b>&#60;br>&#123;sec}

2.2.sec=A "sec"=&#123;0.sec}&#60;ol>&#60;li>&#123;xlist}&#60;/ol>&#123;90.sec}

2.3.sec="0.sec" and "90.sec" if not used, default to the equivalent of nothing - =&#60;/i>

2.4.sec="xlist" defaults to &#60;ol>&#60;li>&#123;Secs}&#60;/ol>, but can also be &#60;ol type="i">&#60;li>&#123;Secs}&#60;/ol> or &#60;ul type="none">&#60;li>&#123;Secs}&#60;/ul>, etc.  It can also be overridden to look for title-less sections &#60;ol type="i">&#60;li>&#123;secs}&#60;/ol> or &#60;ul type="none">&#60;li>&#123;secs}&#60;/ul>, etc.

2.5.sec="Secs" is completed with a number of Sections, for instance: &#123;1.Sec}&#60;li>&#123;2.Sec}. "secs" is completed with title-less sections:  &#123;1.sec}&#60;li>&#123;2.sec}.

2.90.sec=The kit is not mandatory and not complete.  It can be improved and expanded.  Notably, 0.sec and 90.sec could be Intro.sec and Extro.sec, or something along those lines. 

2.=[Z/ol/s5] 

=[Z/ol/s2]
