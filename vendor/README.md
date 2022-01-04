# Cmacc-Vendor
The /vendor/ folder of a Cmacc (ProseObject) website - has all the code except "include.php" which is in the root

To make a Cmacc (ProseObject) website:

# Make a root folder in a web-enabled, PHP and Perl place.

# Copy "include.php" into the root folder. (You'll find a copy loitering in this /vendor/ repo (index.php is useless here, but convenient for copying into the root.)

# Do the same with the /png/ folder - copy it into the root.  It has some little images that are used in the app.  They can't be in /vendor/ because hosting systems prohibit this kind of access to the /vendor/ folder, which is protected.

# Mount this repo as vendor/ 

# Make a new folder Doc/ in the root - that is where your ProseObjects live.  You will very likely have to populate it with the Cmacc-Z folder which has all the document widgets (mount as Doc/Z/), perhaps Cmacc-U with demo objects for persons and places (Doc/U/), and other substantive ones with documents you are interested in.

# If you want all of the current commonaccord.org website and documents, then you can clone Cmacc-Org instead of the above.
