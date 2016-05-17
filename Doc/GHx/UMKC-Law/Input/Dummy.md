Ti=Applicant

0.sec=Please fill in this information {test} based on the criteria which ....

1.Ti=Name

1.0.sec=Please use a name composed of latin characters. 

1.1.Ti=Add your ID:

1.1.sec={ID.Input}

1.2.Ti=If you don't have an ID, we will make one for you:

1.2.sec={Name.Full}

1.00.sec=When you have completed this, please go on to the next question.


2.Ti=Address

2.0.sec=Please use the address where you most often purchase coffee and do email.

2.1.sec={SpiritualHome.Box}

00.sec=Thank you for completing this questionnaire.  If you have any suggestions for improvement of this form, please contact {Author.Name.First}, at {Author.Email}.

1.=[Z/ol/2]

2.=[Z/ol/s1]

=[Z/ol/2]

Note=This form is maintained by:

Author.=[U/id/roberta_robinson]

ID.Input=<form action="demo_form.asp">Identity: [U/id/<input type="text" name="ID.URL">]<input type="submit" value="Submit"></form>

Name.Full=<form action="demo_form.asp">First name: <input type="text" name="Name.First"><br>Last name: <input type="text" name="Name.Last"><br><input type="submit" value="Submit"></form>

SpiritualHome.Box=<form action="demo_form.asp">Coffee Shop: <input type="text" name="SpiritualHome"><input type="submit" value="Submit"></form>

Note=In an XWiki-like rendering - the missing fields can be clicked and filled in.  That is not as good (in this use) as having text fields.  The system could know to render missing fields as text fields if they were either bracketed with something <input>{Name.Full}</input> or used a naming convention like {INPUT:Name.Full}.  The first solution seems better.
