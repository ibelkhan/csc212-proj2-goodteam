csc212-proj2-goodteam
==================================
* Title: csc212-proj2-goodteam;
* Website: http://ec2-54-205-135-226.compute-1.amazonaws.com/index.php;
* Source Codes: https://github.com/mitchellg/csc212-proj2-goodteam;
* Recommanded Browser: Newest Version of Chrome, IE, and Firefox.

What Is It?:
==================================
This webpage's primary feature is to function as an aggregator for upcoming academic talks at the University of Rochester available for students and faculty. Each entry in the table documents a seminar's date, time, speaker, department, lecture topic, food provided, and location. Lectures that have already occured are automatically removed from the table. The site also permits users to add new lectures to the main table. Additionally, the site allows users to choose lectures, add them to their respective google calanders, view the location of the lecture on an integrated map, view the occupancy of the venue, the rating of the speaker, the subject popularity, and the estimated attendance. This information gives users enough details to decide exactly which lectures will be worth their time, given their individual desires. 

Features:
==================================
1. Front-end list for seminar information;
2. Back-end SQL setting for adding and editing seminars;
3. Easy import to Google Calendar;
4. Embedded Google Map, easy to navigate;
5. Estimating seminar information including: room capacity,speaker prominance rating, estimated attendance and etc.

How Do I Use It?
==================================
The module consists of three web pages. The main page, found [here](http://ec2-54-205-135-226.compute-1.amazonaws.com/index.php),
contains the most important component, listing seminars by the designations described above. These features, crucially,
are able to be sorted by date, time, department, speaker information, food availability, and location, as mentioned above.

Seminar info is user-submitted, and this portal can be accessed through the intuitive "Add a seminar" button, located
centrally in the page, as well as the "Add Seminar" button in the index at the top right-hand corner of the page.

A key feature of the homepage is that a simple click on an event will pop up a window with its geographical location
on the University of Rochester campus. This window also contains the aforementioned details of the event. Furthermore,
through this interface, if a user is interested, he can add the event to his directly to his Google calender with 1-click.

The last feature is a large map of the University of Rochester campus, located at the top right of the homepage, in order
to give a larger-scale bearing for a user or new student who is not familiar with the geography of the University.





Version Updates/Log:
==================================
* 10-07: Front-end established: List of seminar information;
* 10-09: Back-end SQL set up: Able to add and edit seminar information;
* 10-12: Embed Google Calendar: Only able to show a personal calendar; Add map image;
* 10-13: Add to Calendar Button: Able to add event to calendar, manually refresh needed;
* 10-14: Embed Google Map; 
         Delete personal calendar (since we do not have a log in system);
         Estimation of extra seminar information;

Contacts
==================================
Authors:
Mitchell Gordon, Lukas Slipski, Michael Shteyn, Jianbo Yuan

If you find a bug that requires attention, or have any other inquiries about the functionality of the site, please
feel free to contact Mitchell Gordon  @<mitchellgordon0@gmail.com>.

Copyright (C) 2013.

 
