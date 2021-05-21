# NOG Management System

At [INNOG](https://innog.net) we are working on building a platform to streamline
process of our annual NOG events. The source code is put on GitHub with the intention
of making it usable for other NOGs as well.

> _As of first commit, I am the only developer working on it. 
> If you're a HTML/CSS OR Laravel/PHP developer
> you can contribute to the project by writing a few lines of code. Even if you don't know
> how to code, you can always help with writing documentation and
> testing features from a user's perspective. If you have the zeal and time
> to invest in this project, I am just an email away: rahulmkhj@gmail.com_

### Following is a list of planned features:

---

1. Admin will:
    - create an event
    - Define desired committees
    - Invite co/chairs for the committees
        - Can invite from existing volunteers
        - Invite new volunteers via email

1. Committee Chairs will: 
    - Invite Volunteers
        - Choose from list of past volunteers
            - View their contribution in previous events
        - Invite new volunteers via email
        - Website gets updated with all accepted volunteers automatically
        - Have a form on the website if anyone wants to volunteer for any of the committees.

1. Tasks:
    - Add Assignees
    - Add Due Date
    - Send reminders as due date approaches
    - Assignees can post updates/comments
    - Mark as pending/completed

1. Run Polls:
    - Committee specific polls
    - Global polls ( involving all committees )

1. Committee Calls:
    - Schedule a call
    - A link be auto created on supported platform of choice. ( zoom etc. )
    - Auto email invitation to all attendees 
    - Mark attendance    
    - Attach call recordings ( audio / video )
        ( if someone who were not able to attend, wants to revisit the discussion )
    - Add minutes of meeting
    

1. Define Presenter time slots.
    - Open CfP
    - Auto email sent to all previous submitters
    - Auto social media updates
    - Committee can review & vote presentations
    - Committee chair will mark presentation as accepted 
    - Automated acceptance emails

1. Define Workshop
    - Add topic & schedule
    - Add instructors
    - Instructor issues certificates on completion
        - These certificates are online verifiable & shareable on social media

1. Open Registrations:
    - Email sent to all previous attendees
        - Automatic registration with webinar platform via api ( in case of virtual )
      - Single click option to opt for presentations & workshop(s)
      - Can register once & use same credentials for future events

1. Event Completed:
    - Email a feedback form to all attendees to rate presentations.

---

Website can be integrated with this platform via APIs
to update automatically on following events:
- When a new event is created
- When committees are formed / updated
- When committee members are added / removed
- When CfP are opened / closed
- When Presenters are finalised
- When workshops are defined 
- When registration are open
- When attendees register for the event
- When event is completed

A number of analytical reports can be fetched like the following:
- Attendee registration trends over time
- Percentage of new vs old attendees
- etc.