Ti=Password

1.0.sec=Password protected at rest

1.1.sec=Hashed using SHA-256 or higher;

1.2.sec=Encrypted with AES algorithm with minimum 128-bit key

1.=[Z/f/ol/s2]

2.0.sec=Passwords protected in motion (one of the following)

2.1.sec=Hash or encrypt the password (using a seed to prevent replay), using algorithm/keylength requirements the same as passwords at rest;

2.2.sec=Encrypt the channel using either SSL V3.0 or TLS V1.0 (or higher)

2.=[Z/f/ol/s2]

3.0.sec=Password strength standards

3.1.sec=Must be seven (7) or more characters in length;

3.2.0.sec=Must contain at least three of the following:

3.2.1.sec=Uppercase letter;

3.2.2.sec=Lower case letter;

3.2.3.sec=Number;

3.2.4.sec=Special character

3.2=[Z/f/ol/s4]

3.=[Z/f/ol/s2]

4.Ti=Password Expiration

NOTE=TO BE COMPLETED

Password must expire every sixty (60) days
Lock out after failed Authentication attempts
Account must lock after five (5) invalid login attempts;
No automated unlock permitted;
A standard process must be in place to manage password resets executed by a system administrator or delegated administrator
Password Reset and Changes
A user must provide their current password or answer a preselected security
question to change or reset their password;
A standard process must be in place to manage password resets executed by
a system administrator or delegated administrator
Password Reuse
A password history must be maintained and none of the previous twelve (12)
passwords may be selected for reuse;
A new password may not be changed again for forty-eight (48) hours in
prevention of password recycling

=[Z/f/ol/4]