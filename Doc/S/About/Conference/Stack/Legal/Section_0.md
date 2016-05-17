Ti=Section

1.sec=The sections of a Contract (and many other documents) are an outline.  An outline is sections, with the possibility of subsections, recursively.  So the fundamental building block of an outline is a Section.

2.0.sec=Most Sections in legal documents can be understood as some combination of four parts: Title, Intro, a list of subsections, and an Extro (sorry).  Many Sections are simpler than this, very few are more complicated.  We have created a kit that builds this in the following way:

2.1.sec=A "Sec"=<b>{Ti}</b><br>{sec}

2.2.sec=A "sec"={0.sec}<ol><li>{xlist}</ol>{00.sec}

2.3.sec="0.sec" and "00.sec" if not used, default to the equivalent of nothing - =</i>

2.4.sec="xlist" defaults to <ol><li>{Secs}</ol>, but can also be <ol type="i"><li>{Secs}</ol> or <ul type="none"><li>{Secs}</ul>, etc.  It can also be overridden to look for title-less sections <ol type="i"><li>{secs}</ol> or <ul type="none"><li>{secs}</ul>, etc.

2.5.sec="Secs" is completed with a number of Sections, for instance: {1.Sec}<li>{2.Sec}. "secs" is completed with title-less sections:  {1.sec}<li>{2.sec}.

2.00.sec=The kit is not mandatory and not complete.  It can be improved and expanded.  Notably, 0.sec and 00.sec could be Intro.sec and Extro.sec, or something along those lines.  At times, I have also experimented with "decorated" sections - for instance where each subsection ends with a ";" and the penultimate one ends with either "; and" or "; or", and the ultimate one ends with ".".  You can also eliminate the numbering ("[Z/paras/..]" or run all the subsections into a single paragraph ("[Z/para/...]").  Widgets would also be useful for lists expressed as elements in a conventional sentence, e.g., "i) first; ii) second; and iii) third."

2.=[Z/ol/s5] 

=[Z/ol/s2]

Note=This File spells out some of the special characters, notably the { so that they are not evaluated.  Editing on GitHub retains the spelled-out form.  As usual, the GitHub interface is well-adapted. 
