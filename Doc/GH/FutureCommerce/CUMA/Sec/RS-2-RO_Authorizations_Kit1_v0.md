Ti=Policy Types

1.Ti=Basic (A-1)

1.sec={PresentToken.sec} (A-1)

2.Ti=Medical (A-2)

2.sec={PresentToken.sec} {RqP.Medical.sec} (A-2) 

3.Ti=Multiple Access (A-3)

3.sec={PresentToken.sec} {MultipleAccess.sec} (A-3)

=[G/Z/ol/3]

PresentToken.sec=We will transmit your information only to a person who presents a cryptographic token and only after we have presented the token to your authorization server and have received authorization from your authorization server to transmit the information.
  
RqP.Medical.sec=Before transmitting your information, we will verify that the person requesting the information is a medical professional.

MultipleAccess.sec=Once we have transmitted information to a person, we will continue, for a period of {MultipleAccessPeriod}, to immediately transmit the same information  in the event of future presentations of the cryptographic token.