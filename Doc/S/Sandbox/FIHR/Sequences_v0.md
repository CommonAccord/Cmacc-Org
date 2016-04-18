Note.Hazardj=renumbered.  13-to-10 were numbered 11-to-9.  But there was already a 9 and an 11.  (Was I missing an "alt-fork" instruction in this?)  (Was there a Spinal Tap notion that things only go up to 11?)

Ti=Sequences

11-13.Note.HazardJ=Broke up the Similar line into two pieces, to conform.

13.Ti=Renewed – Previous contract is superseded by a new version, which may differ only by effective period or may include new or revised terms – e.g., increased premium and fewer exclusions.

13.Note.1=Either you have or could have such a clause.

13.0.sec=Similar HL7 status:

13.1.sec=“superseded”

13.=[Z/ol/s1]


12.Ti=Terminated – Contract reaches its expiry date.  It may or may not be renewed or renegotiated.

12.Note.1=Either you have or could have such a clause.

12.0.sec=Similar HL7 status:

12.1.sec=“obsoleted”

12.=[Z/ol/s1]


11.Ti=Rescinded – Contract is nullified because of faulty execution.  E.g., competency of the signer(s), or where the policy is substantially different from and did not accompany the application/form so that the applicant could not compare them.

11.Note-1= Either you have or could have such a clause.

11.0.sec=Similar HL7 status:

11.1.sec=<i>"nullified" – Definition: “This Act instance was created in error and has been 'removed' and is treated as though it never existed. A record is retained for audit purposes only.”

11.=[Z/ol/s1]


10.Ti=Cancelled – Contract is terminated due to failure of the Grantor and/or the Grantee to fulfill one or more contract provisions.

10.Note.1=Either you have or could have such a clause.

10.0.sec=Similar HL7 status:

10.1.sec=“stopped”

10.2.sec=“failed”

10.3.sec=“aborted” – Definition The Act has been terminated prior to the originally intended completion.

10.=[Z/ol/s3]


9.Ti=Amended – Contract is revised substantially or to correct errors.

9.Note.1=Possibly = to your #5 “the seller accepts the buyer's proposal for resolution of a dispute.”.

9.0.sec=Similar HL7 status:

9.1.sec=revised

9.2.sec=replaced

9.3.sec=entered-in-error

9.=[Z/ol/s3]


8.Ti=Resolved – Contract dispute is settled so that the contract can be reactivated.

8.Note.1=Possibly = to your #5 “the seller accepts the buyer's proposal for resolution of a dispute.”

8.0.sec=Similar HL7 status:

8.1.sec=“on hold”

8.2.sec=“reactivated” – Definition: Change the status of a formerly active object representing an Act to "active", i.e., so it can again be performed or is being performed.

8.=[Z/ol/s2]


7.Ti=Disputed – Contract is pended to rectify failure of the Grantor or the Grantee to fulfill obligations.

7.Note.1=Possibly = to your #4 “which references the prior step, the buyer's complaint”.

7.0.sec=Similar HL7 status:

7.1.sec=“on-hold”

7.2.sec=“pended”

7.3.sec=“suspended” – Definition: Act that has been activated (actions could or have been performed against it), but has been temporarily disabled. No further action should be taken against it until it is released

7.=[Z/ol/s3]



6.Ti=Executed – Contract is activated for period stipulated when both the Grantor and Grantee have signed it.

6.Note.1=Possibly = to your # 3 where both the Grantor and Grantee have signed

6.0.sec=Similar HL7 status:

6.1.sec=accepted

6.2.sec=“completed” – Definition: An Act that has terminated normally after all of its constituents have been performed.

6.=[Z/ol/s2]
 

5.Ti=Rejected – Execution of the Contract is not completed because either or both the Grantor and Grantee decline to accept some or all of the contract provisions.

5.Note.1=Possibly = to your # 3 where the life insurant applicant refuses the counter-offer by the insurer to pay a higher premium.

5.0.sec=Similar HL7 status:

5.1.sec=“stopped”

5.2.sec=“cancelled” – Definition: The Act has been abandoned before activation.

5.=[Z/ol/s2] 

4.Ti=Negotiable – Contract execution is suspended while either or both the Grantor and Grantee propose and consider new or revised contract provisions.

4.Note.1=Possibly = to your # 3 where the party which has not signed proposes changes to the terms – e.g., a life insurer declines to agree to the signed application because the life insurer has evidence that the applicant, who asserted to being younger or a non-smoker to get a lower premium rate – but offers instead to agree to a higher premium based on the applicant’s actual age or smoking status.

4.0.sec=Similar HL7 status:  

4.1.sec=“in progress”

4.2.sec=“pending”

4.3.sec=“review” 

4.Comment.Ti=Comment

4.Comment.0.sec=Could have 2 flavors:

4.Comment.1.sec=§  start out as “held” – Definition: An Act that is still in the preparatory stages has been put aside. No action can occur until the Act is released.” 

4.Comment.2.sec=§  progress to “released” – Definition: Change the status of an object representing an Act so it is no longer "held", i.e., allow action to occur.

4.Comment.=[Z/ol/s2]

4.90.Sec={4.Comment.Sec}

4.=[Z/ol/s3]


 
3.Ti=Executable – Contract may be executed when either the Grantor or the Grantee accepts the contract provisions by signing.

3.Note.1=Possibly = to your # 3 “which references the signed agreement” where either the Grantor or the Grantee has signed, but not both – e.g., when an insurance applicant signs the insurer’s application, which references the policy.  Also, think this might be comparable to “Order” in you demo.

3.0.sec=Similar HL7 status:

3.1.sec=“draft”

3.2.sec=“preliminary”

3.3.sec= “planned”

3.4.sec=“intended”

3.5.sec= “active”- Definition: The Act can be performed or is being performed

3.=[Z/ol/s5]



2.Ti=Application / Offer – Contract is a proposal by either the Grantor or the Grantee.

2.Note.1=Possibly = to your # 2 “which references the purchase”.  Seems comparable to

2.0.sec=Similar HL7 status:

2.1.sec=“requested”

2.2.sec=“new” – Definition: An Act that is in the preparatory stages and may not yet be acted upon

2.=[Z/ol/s2]

 
1.Ti=Policy/Form

1.0.sec=Contract template is available as the basis for an application or offer by the Grantor or Grantee.

1.Note.1=Possibly = to your # 1 “which references the merchant's general conditions, which references a form.”

1.0.sec=Similar HL7 status:

1.1.sec=“proposed”

1.2.sec=“intended”

1.=[Z/ol/s2]
 
=[Z/ol/13]

Note=Let me know if these make some sense, where I misunderstood the examples in Common Accord site, and any changes this group would like to recommend.